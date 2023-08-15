<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Hellena extends CI_Model
{
    public function get_pasien()
    {
        $sql = "SELECT * FROM patient WHERE Email = ?";
        $query = $this->db->query($sql, $this->session->userdata('email'));

        return $query->result();
    }

    public function add_pasien($data)
    {
        $this->db->insert('patient', $data);
    }

    public function get_doctor()
    {
        return $this->db->get('doctor');
    }

    public function get_doctor_by_email()
    {
        $sql = "SELECT * FROM doctor WHERE Email = ?";
        $query = $this->db->query($sql, $this->session->userdata('email'));

        return $query->result();
    }

    public function get_doctor_search()
    {
        $nama = $this->input->post('nama');
        $special = $this->input->post('special');
        $negara = $this->input->post('negara');
        $this->db->where('Nama', $nama);
        $this->db->or_where('Spesialis', $special);
        $this->db->or_where('Negara', $negara);
        return $this->db->get('doctor');
    }

    public function add_doctor($data)
    {
        $this->db->insert('doctor', $data);
    }

    public function patient_login()
    {
        $this->db->where('Email', $this->input->post('email'));
        $this->db->where('Password', $this->input->post('password'));
        $query = $this->db->get('patient');
        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function doctor_login()
    {
        $this->db->where('Email', $this->input->post('email'));
        $this->db->where('Password', $this->input->post('password'));
        $query = $this->db->get('doctor');
        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function patient_register()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nomorHP' => $this->input->post('nomorHP'),
            'Email' => $this->input->post('email'),
            'TglLahir' => $this->input->post('lahir'),
            'CountryIdNum' => $this->input->post('nik'),
            'Password' => $this->input->post('password')
        );
        $this->db->insert('patient', $data);
    }

    public function patient_image($data)
    {
        $this->db->set('image', $data);
        $this->db->where('Email', $this->session->userdata('email'));
        $this->db->update('patient');
    }


    public function doctor_register()
    {
        $data = [
            "Nama" => $this->input->post("name"),
            "NomorHP" => $this->input->post("phone"),
            "Email" => $this->input->post("email"),
            "Password" => $this->input->post("password"),
            "Lulusan" => $this->input->post("univ"),
            "Wisuda" => $this->input->post("dates"),
            "Spesialis" => $this->input->post('special'),
            "Negara" => $this->input->post('country'),
            "Image" => null,
            "Certificate" => $_FILES['fileuploads']['name'][0],
            "Licence" => $_FILES['fileuploads']["name"][1],
        ];

        $this->db->insert("doctor", $data);
    }

    public function doctor_image($data)
    {
        $this->db->set('Image', $data);
        $this->db->where('Email', $this->session->userdata('email'));
        $this->db->update('doctor');
    }


    public function getMedicine($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        return $this->db->get('medicine');
    }

    public function getMedicineById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('medicine');
        return $query->result();
    }

    public function countMedicine()
    {
        $query = $this->db->get('medicine');
        return $query->num_rows();
    }

    public function addOrder($medic)
    {
        $sql = "SELECT * FROM patient WHERE Email = ?";
        $query = $this->db->query($sql, $this->session->userdata('email'));
        foreach ($query->result_array() as $row) {
            $user = $row['id'];
        };
        $data = [
            "medicine_id" => $medic,
            "patient_id" => $user,
            "kuantitas" => 1,
            "total_harga" => null
        ];
        $this->db->insert('orders', $data);
    }

    public function getOrder($id)
    {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->join('patient', 'patient.id = orders.patient_id');
        $this->db->join('medicine', 'medicine.id = orders.medicine_id');
        $this->db->where('patient_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function deleteOrder($id)
    {
        $this->db->where('order_id', $id);
        $this->db->delete('orders');
    }

    public function updatePrice($id, $harga, $kuantitas)
    {
        $total = $kuantitas * $harga;
        $this->db->set('total_harga', $total);
        $this->db->set('kuantitas', $kuantitas);
        $this->db->where('order_id', $id);
        $this->db->update('orders');
    }

    public function totalOrder($id)
    {
        $this->db->select_sum('total_harga');
        $this->db->from('orders');
        $this->db->where('patient_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
}
