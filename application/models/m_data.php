<?php
class M_data extends CI_Model{
    function ambil_data()
    {
        return $this->db->get('user');
    }
    function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where, $table){
       return $this->db->get_where($table, $where);
    }
    function data(){
        $this->db->insert('user');
    }
    function komentar(){
        $data=array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'komentar' => $this->input->post('komentar'),
           
        );
        return  $this->db->insert('komentar', $data);
    }
    function ambil_komen()
    {
        return $this->db->get('komentar');
    }
        

}