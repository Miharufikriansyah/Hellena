<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url', "form");
        $this->load->library('session','form_validation');
        $this->load->model('M_Hellena');
    }

    public function loginPat(){
		$this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message','Gagal Login');
            redirect(base_url() . 'Hellena/signPat');
		}else{
            if ($this->M_Hellena->patient_login()) {
                $this->session->set_userdata('email',$this->input->post('email'));
                redirect(base_url() . 'Hellena/homeLogin');
            }else{
                $this->session->set_flashdata('message','Gagal Login');
                redirect(base_url() . 'Hellena/signPat');
            }
        }		
    }

    public function loginDoc(){
		$this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message','Gagal Login');
            redirect(base_url() . 'Hellena/signDoc');
		}else{
            if ($this->M_Hellena->doctor_login()) {
                $this->session->set_userdata('email',$this->input->post('email'));
                redirect(base_url() . 'Hellena/homeDoctor');
            }else{
                $this->session->set_flashdata('message','Gagal Login');
                redirect(base_url() . 'Hellena/signDoc');
            }
        }		
    }



    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function registerDoc()
    {
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library("upload", $config);
    
        $this->M_Hellena->doctor_register();

        $num_file = count($_FILES['fileuploads']['name']);

        for ($i=0; $i < $num_file; $i++) { 
            if(!empty($_FILES['fileuploads']['name'][$i])){

                $_FILES['file']['name'] = $_FILES['fileuploads']['name'][$i];
                $_FILES['file']['type'] = $_FILES['fileuploads']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['fileuploads']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['fileuploads']['error'][$i];
                $_FILES['file']['size'] = $_FILES['fileuploads']['size'][$i];
        
                if(!$this->upload->do_upload('file')){
                    $this->session->set_flashdata("error", $this->upload->display_errors());
            
                    redirect("http://localhost/Hellena/Hellena/registDoc");
                }
            }else{
                $this->session->set_flashdata("error", "File Cannot Be Empty!");
            
                redirect("http://localhost/Hellena/Hellena/registDoc");
            }
        }

        $this->session->set_flashdata("message", "Upload FIle Successfull");
        $this->session->set_userdata('email',$this->input->post('email'));
        redirect("http://localhost/Hellena/Hellena/registered");
        
    }

    public function registerPat(){
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message','Gagal Login');
            redirect(base_url() . 'Hellena/registPat');
        }else{
            $this->M_Hellena->patient_register();
            $this->session->set_userdata('email',$this->input->post('email'));
            redirect('Hellena/registered');
        }
    }

}