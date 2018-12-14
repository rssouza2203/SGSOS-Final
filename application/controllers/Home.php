<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
 
    }


	public function index()
	{
		$this->load->view('topo');
		$this->load->view('bemvindo');
		$this->load->view('rodape');
	}

	public function ajuda()
	{
		$this->load->helper('download');

		$data = file_get_contents(base_url()."/manual/manual.pdf"); // Read the file's contents
		$name = 'manual.pdf';
 
force_download($name, $data);


		
	}

	public function logout(){
		$dadosSessao['usuariologado'] = NULL;
				$dadosSessao['usuario'] = NULL;
				$dadosSessao['logado']= FALSE;
				$this->session->set_userdata($dadosSessao);
		
		redirect(base_url('inicial'));
		//$this->load->view('inicial');
	}

	
}
