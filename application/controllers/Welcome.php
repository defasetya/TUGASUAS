<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_data');
	}
	function index()
	{
		$this->load->view('index');
	}
	public function about()
	{
		$data=array(
			'judul' => 'About'
		);
		
		$this->load->view('about', $data);
	}
	function concerts()
	{
		$data=array(
		);

		$this->load->view('concerts', $data);
	}
	function contact()
	{
		$data=array(
		    'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'komentar'=> $this->input->post('komentar'),
		);	
		$this->db->insert('komentar', $data);
		$this->load->view('contact');

		
	}
	function gallery()
	{
		$data=array(
			
		);

		$this->load->view('gallery', $data);
	}
	function formorder2()
	{
		$data=array(
		);

		$this->load->view('formorder2', $data);
	}
	function formorderout2()
	{
		$data=array(
		);

		$this->load->view('formorderout2', $data);
	}
	function data()
	{
			

		
	}
	
	
	
		
	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
}
