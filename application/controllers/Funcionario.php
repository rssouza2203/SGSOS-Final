<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        
			$this->load->model('funcionario_model');
			$this->load->model('dao/funcionariodao');

    }


	public function index()
	{
				$this->load->view('topo');
				$this->load->view('bemvindo');
				$this->load->view('rodape');

	}



	public function funcionarios()
	{
				$this->load->view('topo');
				$lista = $this->funcionariodao->listar_funcionarios();
				$dados = array('funcionario' => $lista );

				$this->load->view('funcionarios', $dados);
				$this->load->view('rodape');

	}

	public function adicionar_funcionario()
	{
				$this->load->view('topo');
				$this->load->view('adicionarfuncionario');
				$this->load->view('rodape');

	}

		public function inserir_login()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome','Nome',
			'required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('telefone','Telefone',
			'required|min_length[8]|max_length[11]');

		$this->form_validation->set_rules('matricula','Matricula',
			'numeric|required|exact_length[6]|is_unique[funcionario.matricula]');
		$this->form_validation->set_rules('senha','Senha',
			'required|min_length[5]');
		
		if ($this->form_validation->run() == FALSE){
			$this->adicionar_funcionario();
		}else{
		
		
		$this->load->model('login_model');
		$this->load->model('dao/logindao');



		//ver como vaidadar CPF na Biblioteca de validação
		//$this->load->Library('form_validation');
		//$this->form_validation->set_rules('nome','Nome de Usuário', 'required|min_lenght[3]');
		//if($this->form_validation->run()==FALSE){
			//$this->index();
		//}else{

			//redirect(base_url('tema\topo'));

			//$solicitante = new Solicitante();
			$login = new login_model();

			$login->setUsuario($this->input->post('matricula'));
			$login->setSenha($this->input->post('senha'));
			if ($this->input->post('administrador')) {
				$login->setTipo('fa');
			}else{
				$login->setTipo('f');
			}
			

			

			/*$solicitante->setNome($this->input->post('nome'));
			$solicitante->setCpf($this->input->post('cpf'));
			$solicitante->setEmail($this->input->post('email'));
			$ultimoid = $this->db->insert_id();
			$ultimoid++;
			$solicitante->setLogin($ultimoid);//aqui ta passando objeto VERFICAR*/
			

			if($this->logindao->adicionar($login)){
				//redirect(base_url('/login'));
				$this->inserir_funcionario();


				
				//$this->load->view('\topo');
				//$this->inserir_solicitante();
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}
		}


		public function inserir_funcionario()
	{
		
		
			$funcionario = new Funcionario_model();
			

			$funcionario->setNome($this->input->post('nome'));
			$funcionario->setMatricula($this->input->post('matricula'));
			$funcionario->setTelefone($this->input->post('telefone'));
			
			

			if($this->funcionariodao->adicionar($funcionario)){
				
				$this->load->view('topo');

				$this->load->view("adicionarfuncionariosucesso");
				
				$this->load->view('rodape');
			}else{
				echo "Houve um erro no sistema!";
			}

		}



		public function alterar_login()
	{
		


		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome','Nome',
			'required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('telefone','Telefone',
			'required|min_length[8]|max_length[11]');

		
		$this->form_validation->set_rules('senha','Senha',
			'required|min_length[5]');
		
		if ($this->form_validation->run() == FALSE){
			$this->adicionar_funcionario();
		}else{
		
		$this->load->model('login_model');
		$this->load->model('dao/logindao');



		//ver como vaidadar CPF na Biblioteca de validação
		//$this->load->Library('form_validation');
		//$this->form_validation->set_rules('nome','Nome de Usuário', 'required|min_lenght[3]');
		//if($this->form_validation->run()==FALSE){
			//$this->index();
		//}else{

			//redirect(base_url('tema\topo'));

			//$solicitante = new Solicitante();
			$login = new login_model();
			$login->setIdLogin($this->input->post('idlogin'));
			$login->setUsuario($this->input->post('matricula'));
			$login->setSenha($this->input->post('senha'));
			if ($this->input->post('administrador')) {
				$login->setTipo('fa');
			}else{
				$login->setTipo('f');
			}
			

			

			/*$solicitante->setNome($this->input->post('nome'));
			$solicitante->setCpf($this->input->post('cpf'));
			$solicitante->setEmail($this->input->post('email'));
			$ultimoid = $this->db->insert_id();
			$ultimoid++;
			$solicitante->setLogin($ultimoid);//aqui ta passando objeto VERFICAR*/
			

			if($this->logindao->alterar_login($login)){
				//redirect(base_url('/login'));
				$this->alterar_funcionario();


				
				//$this->load->view('\topo');
				//$this->inserir_solicitante();
				
			}else{
				echo "Houve um erro no sistema!";
			}
		}
		}


		public function visualizar_funcionario($id)
	{
				$this->load->view('topo');

				

				$flista = $this->funcionariodao->visualizar_funcionario($id);

				$fdados = array('vfuncionario' => $flista );

				
				$this->load->view('alterarfuncionario', $fdados);
				$this->load->view('rodape');

	}


		public function alterar_funcionario()
	{
		
		//$this->load->model('Login');
		//$this->load->model('dao/logindao');




		//ver como vaidadar CPF na Biblioteca de validação
		//$this->load->Library('form_validation');
		//$this->form_validation->set_rules('nome','Nome de Usuário', 'required|min_lenght[3]');
		//if($this->form_validation->run()==FALSE){
			//$this->index();
		//}else{

			//redirect(base_url('tema\topo'));

			$funcionario = new Funcionario_model();
			//$login = new Login();

			/*$login->setUsuario($this->input->post('cpf'));
			$login->setSenha($this->input->post('senha'));
			$login->setTipo('u');*/

			$funcionario->setIdFuncionario($this->input->post('idfuncionario'));
			$funcionario->setNome($this->input->post('nome'));
			$funcionario->setMatricula($this->input->post('matricula'));
			$funcionario->setTelefone($this->input->post('telefone'));
			
			

			if($this->funcionariodao->alterar_funcionario($funcionario)){
				//redirect(base_url('/login'));

				//$this->load->view('\topo');

				//Aqui TEM QUE VERIFICAR OQ FAZER SE VAI ABRIR PAGINA OU MENSAGEM
				$this->load->view('topo');

				$this->load->view("alterarfuncionariosucesso");
				
				$this->load->view('rodape');
			}else{
				echo "Houve um erro no sistema!";
			}
		}

		
		public function gerar_relatorio()
	{
		
		
         $lista = $this->funcionariodao->listar_funcionarios();
         $dados = array('funcionario' => $lista );

    $html = $this->load->view('imprimirfuncionarios', $dados, TRUE);

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
