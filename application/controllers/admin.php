<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller 
{
  function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_data');
		
		
	}

public function index()
    {
      $data['title'] = 'Dashboard';
      $data['user'] = $this->m_data->ambil_data()->result();
      $this->load->view('admin/v_header',$data);
      $this->load->view('admin/index',$data);
      $this->load->view('admin/v_footer',$data);
    }
    function tables(){
     
      $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
      $data['komentar'] = $this->m_data->ambil_komen()->result();
      $this->load->view('admin/v_header');
      $this->load->view('admin/tables', $data);
      $this->load->view('admin/v_footer');
    }
    function hapus($id)
    {
        $where=array('id' => $id);
        $this->m_data->hapus_data($where, 'user');
        redirect('admin/index');
    }
    function edit($id)
    {
        $where=array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where, 'user')->result();
        $this->load->view('admin/v_edit', $data);
        
    }
    public function card()
    {
        $data['title'] = 'my Profile';
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/card',$data);
}
function delete($id)
    {
        $where=array('id' => $id);
        $this->m_data->hapus_data($where, 'komentar');
        redirect('admin/tables');
    }
    function ubah($id)
    {
        $where=array('id' => $id);
        $data['komentar'] = $this->m_data->edit_data($where, 'komentar')->result();
        $this->load->view('admin/v_edit', $data);
       
        
    }

}