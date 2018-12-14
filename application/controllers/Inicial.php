<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        
			$this->load->model('login_model');
			$this->load->model('dao/logindao');
			$this->load->model('solicitante_model');
			$this->load->model('dao/solicitantedao');
			$this->load->model('funcionario_model');
			$this->load->model('dao/funcionariodao');

    }


	public function index()
	{
		$this->load->view('login');
	}

	public function cadastrar()
	{
		$this->load->view('cadastrar');
	}



public function verifica_login()
	{
		


		$this->load->library('form_validation');
		$this->form_validation->set_rules('usuario','Usuário',
			'numeric|required|min_length[3]|max_length[11]');
		$this->form_validation->set_rules('senha','Senha',
			'required|min_length[5]');
		if ($this->form_validation->run() == FALSE){
			$this->load->view("login");
		}else{



			$login = new login_model();
			$login->setUsuario($this->input->post('usuario'));
			$login->setSenha($this->input->post('senha'));
			$usuariologado = $this->logindao->busca_login($login->getUsuario(),$login->getSenha());



			if(count($usuariologado)==1){
				$dadosSessao['usuariologado'] = $usuariologado[0];
				$dadosSessao['logado']= TRUE;

				$this->session->set_userdata($dadosSessao);
				//redirect(base_url('admin'));
				
				if($this->session->userdata('usuariologado')->tipo=='s'){
					$solicitante = $this->solicitantedao->busca_solicitante($this->session->userdata('usuariologado')->idLogin);
					$dadosSessao['usuario'] = $solicitante[0];
					$this->session->set_userdata($dadosSessao);
					
					redirect(base_url('solicitante'));

				}else{
					$funcionario = $this->funcionariodao->busca_funcionario($this->session->userdata('usuariologado')->idLogin);
					$dadosSessao['usuario'] = $funcionario[0];
					$this->session->set_userdata($dadosSessao);

					redirect(base_url('funcionario'));	

				}
				
				

			}else{
				$dadosSessao['usuariologado'] = NULL;
				$dadosSessao['usuario'] = NULL;
				$dadosSessao['logado']= FALSE;
				$this->session->set_userdata($dadosSessao);
				redirect(base_url('inicial'));
				//$this->load->view('inicial');
			}

		}

}
		public function inserir_login()
	{
		
		


		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome','Nome',
			'required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('email','Email',
			'required|min_length[3]|max_length[100]|valid_email|is_unique[solicitante.email]');

		$this->form_validation->set_rules('cpf','CPF',
			'numeric|valid_cpf|required|exact_length[11]|is_unique[solicitante.cpf]');
		$this->form_validation->set_rules('senha','Senha',
			'required|min_length[5]');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view("cadastrar");
		}else{

			$login = new login_model();

			$login->setUsuario($this->input->post('cpf'));
			$login->setSenha($this->input->post('senha'));
			$login->setTipo('s');

			

			if($this->logindao->adicionar($login)){
			
				$this->inserir_solicitante();


				
				
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}
		}


		public function inserir_solicitante()
	{
		
	

			$solicitante = new Solicitante_model();
			


			$solicitante->setNome($this->input->post('nome'));
			$solicitante->setCpf($this->input->post('cpf'));
			$solicitante->setEmail($this->input->post('email'));
			
			

			if($this->solicitantedao->adicionar($solicitante)){

				$this->load->view("login");
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}


	


		
	}
