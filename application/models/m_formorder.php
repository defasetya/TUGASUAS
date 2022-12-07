<?php
class M_formorder extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('formorderout2');
    }
}