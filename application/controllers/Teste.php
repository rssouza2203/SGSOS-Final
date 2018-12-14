<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        

    }


	public function index()
	{
		
		
        $this->consulta_login();
		//$this->inserir_solicitacao();
       

	}

	public function inserir_login()
	{
		
		$this->load->model('Login');
		$this->load->model('dao/logindao');


			$login = new Login();

			$login->setUsuario("07243515");
			$login->setSenha("123");
			$login->setTipo('u');

			
			

			if($this->logindao->adicionar($login)){
				
				$this->inserir_funcionario();
				echo "LOGIN ADD <br>";
				
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}


	public function inserir_solicitante()
	{
		$this->load->model('solicitante');
		$this->load->model('dao/solicitantedao');
		

			$solicitante = new Solicitante();

			$solicitante->setNome("Damiana");
			$solicitante->setCpf("07243515665");
			$solicitante->setEmail("Damiana");
			
			

			if($this->solicitantedao->adicionar($solicitante)){
				
				echo "SOLICITANTE ADD <br>";
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}

		public function inserir_funcionario()
	{
		$this->load->model('funcionario');
		$this->load->model('dao/funcionariodao');
		

			$funcionario = new funcionario();

			$funcionario->setNome("Damiana");
			$funcionario->setMatricula("07243515");
			$funcionario->setTelefone("032984800857");
			
			

			if($this->funcionariodao->adicionar($funcionario)){
				
				echo "funcionario ADD <br>";
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}

public function inserir_solicitacao()
	{
			
			$this->load->model('Solicitacao');
			$this->load->model('dao/solicitacaodao');


			$solicitacao = new Solicitacao();

			$solicitacao->setDescricao("Teste");
			$solicitacao->setProtocolo(date('YmdHis'));
			$solicitacao->setStatus('1'); //1=Aguardando Analise
			$solicitacao->setTipoSolicitacao("1");
			$solicitacao->setCep("36600000");
			$solicitacao->setData(date('Y-m-d H:i:s'));
			$solicitacao->setRua("Rua A");
			$solicitacao->setNumero("123");
			$solicitacao->setBairro("Centro");
			$solicitacao->setComplemento("casa");

			
			if($this->solicitacaodao->adicionar($solicitacao)){
				echo "SOLICITACAO ADD <br>";
				
			}else{
				echo "Houve um erro no sistema!";
			}

	}	

public function inserir_analise()
	{
			
			$this->load->model('Analise');
			$this->load->model('dao/analisedao');


			$analise = new Analise();

			
			$analise->setData(date('Y-m-d H:i:s'));
			
			
			
			if($this->analisedao->adicionar($analise, 1,6)){
				echo "Analise ADD <br>";
				
			}else{
				echo "Houve um erro no sistema!";
			}

	}	

	public function inserir_os()
	{
			
			$this->load->model('OS');
			$this->load->model('dao/osdao');


			$os = new OS();

			
			
			$os->setProtocolo("1000".date('Y-m-d')."");
			$os->setDescricao("teste");
			$os->setData(date('Y-m-d H:i:s'));
			
			if($this->osdao->adicionar($os, 2)){
				echo "OS ADD <br>";
				
			}else{
				echo "Houve um erro no sistema!";
			}

	}


	public function consulta_login()
	{
		
		$this->load->model('Login');
		$this->load->model('dao/logindao');


			$login = new Login();

			$login->setUsuario("07243515");
			$login->setSenha("123");
			
			
			

			if($this->logindao->busca_login($login->getUsuario(),$login->getSenha())){
				
				
				echo "Achei ADD <br>";
				
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}	
	
}
