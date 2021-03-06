<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user'); 
        $this->db->limit(10, 0);
        return $this->db->get();
    }

    public function ambil_data_edit($id){
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->result();
    }

    public function delete_data($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

        public function lupapassword($email)
     {
            $this->db->select('email');
            $this->db->from('user'); 
            $this->db->where('email', $email); 
            $query=$this->db->get();
            return $query->row_array();
     }
}