<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hellena extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->model('M_Hellena');
        $this->load->library('form_validation','session','pagination');
    }

    public function index(){
        $this->load->view('home');
    }

    public function signOption(){
        $this->load->view('Auth/signOption');
    }


    public function signDoc(){

        $this->load->view('Auth/docSignIn');
    }

    public function signPat(){
        $this->load->view('Auth/patSignIn');
    }



    public function registDoc(){
        $this->load->view('Auth/docSignUp');
    }

    public function registPat(){
        $this->load->view('Auth/patSignUp');
    }

    public function infoPat(){
        $data['query']= $this->M_Hellena->get_pasien();
        $this->load->view('Login/profile',$data);
    }

    public function infoDoc(){
        $data['query']= $this->M_Hellena->get_doctor_by_email();
        $this->load->view('Login/profiledoc',$data);
    }

    public function homeLogin(){
        if ($this->session->userdata("email")) { 
            $this->load->view('Login/homeUser');
        }else{
            redirect(base_url());
        }
        
    }

    public function homeDoctor(){
        if ($this->session->userdata("email")) {
            $this->load->view('Login/homeDoctor');
        }else{
            redirect(base_url());
        }
    }

    public function registered(){
        $this->load->view('Auth/registered');
    }

    public function doctorList(){
        $data['doc']['entries'] = $this->M_Hellena->get_doctor();
        $this->load->view('Pages/doctorList',$data);
    }

    public function doctorSearch(){
        $data['doc']['entries'] = $this->M_Hellena->get_doctor_search();
        $this->load->view('Login/doctorListLog',$data);
    }

    public function doctorListLog(){
        $data['doc']['entries'] = $this->M_Hellena->get_doctor();
        $this->load->view('Login/doctorListLog',$data);
    }

    public function medicineList(){
        $config['base_url'] = site_url() . 'Hellena/medicineListLog';
        $config['total_rows'] = $this->M_Hellena->countMedicine();
        $config['per_page'] = 5;
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';
        $offset = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['medic']['entries'] = $this->M_Hellena->getMedicine($config['per_page'],$offset);
        $this->load->view('Pages/medicine',$data);
    }

    public function medicineListLog(){
        $config['base_url'] = site_url() . 'Hellena/medicineListLog';
        $config['total_rows'] = $this->M_Hellena->countMedicine();
        $config['per_page'] = 5;
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';
        $offset = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['medic']['entries'] = $this->M_Hellena->getMedicine($config['per_page'],$offset);
        $this->load->view('Login/medicineLogin',$data);
    }

    public function orderList(){
        $data['medic'] = $this->M_Hellena->get_pasien();
        $medic = $data['medic'];
        $id = '';
        foreach($medic as $row){
            $id = $row->id;
        }
        $data['query'] = $this->M_Hellena->getOrder($id);
        $data['total'] = $this->M_Hellena->totalOrder($id);
        $this->load->view('Login/order',$data);
    }

    public function deleteOrderList($id){
        $this->M_Hellena->deleteOrder($id);
        redirect('Hellena/orderList');
    }

    public function updateOrder($id,$harga,$kuantitas){
        $this->M_Hellena->updatePrice($id,$harga,$kuantitas);
        redirect('Hellena/orderList');
    }

    public function orders($medic){
        $this->M_Hellena->addOrder($medic);
        redirect('Hellena/medicineListLog');
    }

    public function uploadPatImg(){
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload_file')){
            $this->session->set_flashdata("error", $this->upload->display_errors());

            // redirect('Hellena/infoPat');
        }
        else{
            $data =$this->upload->data();
            $this->M_Hellena->patient_image($data['file_name']);

            // $this->load->view('Login/profile',$data);
            redirect('Hellena/infoPat');
        }
    }

    public function uploadDocImg(){
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload_file')){
            $this->session->set_flashdata("error", $this->upload->display_errors());

            // redirect('Hellena/infoPat');
        }
        else{
            $data =$this->upload->data();
            $this->M_Hellena->doctor_image($data['file_name']);

            // $this->load->view('Login/profile',$data);
            redirect('Hellena/infoDoc');
        }
    }

    public function notregistered(){
        $this->load->view('Auth/notregistered');
    }

    public function successOrder(){
        $this->load->view('Pages/successOrder');
    }
}