<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitante extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        
			$this->load->model('solicitante_model');
			$this->load->model('dao/solicitantedao');

    }


	public function index()
	{
				$this->load->view('topo');
				$this->load->view('bemvindo');
				$this->load->view('rodape');

	}


public function adicionar_solicitante()
	{
				$this->load->view('topo');
				$this->load->view('adicionarsolicitante');
				$this->load->view('rodape');

	}

	public function solicitantes()
	{
				$this->load->view('topo');
				$lista = $this->solicitantedao->listar_solicitantes();
				$dados = array('solicitante' => $lista );

				$this->load->view('solicitantes', $dados);
				$this->load->view('rodape');

	}

		public function visualizar_solicitante($id)
	{
				$this->load->view('topo');

				

				$slista = $this->solicitantedao->visualizar_solicitante($id);

				$sdados = array('vsolicitante' => $slista );

				
				$this->load->view('alterarsolicitante', $sdados);
				$this->load->view('rodape');

	}


	public function alterar_login()
	{
		
		
		$this->load->model('login_model');
		$this->load->model('dao/logindao');

$this->load->library('form_validation');

		$this->form_validation->set_rules('nome','Nome',
			'required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('email','Email',
			'required|min_length[3]|max_length[100]|valid_email');

		
		$this->form_validation->set_rules('senha','Senha',
			'required|min_length[5]');
		
		if ($this->form_validation->run() == FALSE){
			$this->visualizar_solicitante($this->session->userdata('usuario')->idSolicitante);
		}else{




			$login = new login_model();
			$login->setIdLogin($this->input->post('idlogin'));
			
			$login->setSenha($this->input->post('senha'));
			
			

			

			/*$solicitante->setNome($this->input->post('nome'));
			$solicitante->setCpf($this->input->post('cpf'));
			$solicitante->setEmail($this->input->post('email'));
			$ultimoid = $this->db->insert_id();
			$ultimoid++;
			$solicitante->setLogin($ultimoid);//aqui ta passando objeto VERFICAR*/
			

			if($this->logindao->alterar_login($login)){
				//redirect(base_url('/login'));
				$this->alterar_solicitante();


				
				//$this->load->view('\topo');
				//$this->inserir_solicitante();
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}
		}

		public function alterar_solicitante()
	{
		
		

			$solicitante = new Solicitante_model();
			//$login = new Login();

			/*$login->setUsuario($this->input->post('cpf'));
			$login->setSenha($this->input->post('senha'));
			$login->setTipo('u');*/

			$solicitante->setIdSolicitante($this->input->post('idsolicitante'));
			$solicitante->setNome($this->input->post('nome'));
			
			$solicitante->setEmail($this->input->post('email'));
			
			

			if($this->solicitantedao->alterar_solicitante($solicitante)){
				//redirect(base_url('/login'));

				//$this->load->view('\topo');

				//Aqui TEM QUE VERIFICAR OQ FAZER SE VAI ABRIR PAGINA OU MENSAGEM
				$this->load->view('topo');

				$this->load->view("alterarsolicitantesucesso");
				
				$this->load->view('rodape');
			}else{
				echo "Houve um erro no sistema!";
			}
		}

		public function gerar_relatorio()
	{
		
		
         $lista = $this->solicitantedao->listar_solicitantes();
         $dados = array('solicitante' => $lista );

    $html = $this->load->view('imprimirsolicitantes', $dados, TRUE);

	$mpdf = new mPDF();
	
	$mpdf->SetHeader('SGSOS');

	$mpdf->SetFooter('{PAGENO}');
	
	$mpdf->writeHTML($html);
	// Cria uma nova página no arquivo
	
	// Gera o arquivo PDF
	$mpdf->Output();
	$mpdf->charset_in='windows-1252';
		

	}

		


	
		
	}
