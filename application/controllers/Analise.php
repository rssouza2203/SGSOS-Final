<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analise extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        
			$this->load->model('analise_model');
			$this->load->model('dao/analisedao');

    }


	public function index()
	{
				$this->load->view('topo');


				$lista = $this->analisedao->listar_analises();
				$dados = array('analise' => $lista );

				$this->load->view('analises', $dados);
				$this->load->view('rodape');

	}


		public function gerar_analise()
	{
			$this->load->model('solicitacao_model');
			$this->load->model('dao/solicitacaodao');


			$analise = new Analise_model();

			$idfuncionario = $this->session->userdata('usuario')->idFuncionario;

			$idsolicitacao = ($this->input->post('idsolicitacao'));

			$analise->setData(date('Y-m-d H:i:s'));

			$status="2";
			
			if($this->analisedao->adicionar($analise,$idfuncionario,$idsolicitacao) && $this->solicitacaodao->alterar_status($idsolicitacao,$status)){
				$this->load->view('topo');

				$this->load->view('geraranalisesucesso');
					
				$this->load->view('rodape');
				
			}else{
				
				echo "Houve um erro no sistema!";
				
			}

			
			

		}


		public function visualizar_analise($id)
	{
				$this->load->view('topo');


				$vlista = $this->analisedao->visualizar_analise($id);
				$vdados = array('vanalise' => $vlista );

				$this->load->view('visualizaranalise', $vdados);
				$this->load->view('rodape');

	}




		public function indeferir_solicitacao($id)
	{
			$this->load->model('solicitacao_model');
			$this->load->model('dao/solicitacaodao');


			$status="4";
			
			if($this->solicitacaodao->alterar_status($id,$status)){
				$this->load->view('topo');

				$this->load->view('indeferirsucesso');
					
				$this->load->view('rodape');
				
			}else{
				
				echo "Houve um erro no sistema!";
				
			}

			
			

		}
/*

public function adicionar_solicitacao()
	{
				$this->load->view('topo');


				$this->load->view('adicionarsolicitacao');
				$this->load->view('rodape');

	}

	public function inserir_solicitacao()
	{
			


			$solicitacao = new Solicitacao_model();

			$solicitacao->setDescricao($this->input->post('descricao'));
			$solicitacao->setProtocolo(date('YmdHis'));
			$solicitacao->setStatus('1'); //1=Aguardando Analise
			$solicitacao->setTipoSolicitacao($this->input->post('tiposolicitacao'));
			$solicitacao->setCep($this->input->post('cep'));
			$solicitacao->setData(date('Y-m-d H:i:s'));
			$solicitacao->setRua($this->input->post('rua'));
			$solicitacao->setNumero($this->input->post('numero'));
			$solicitacao->setBairro($this->input->post('bairro'));
			$solicitacao->setComplemento($this->input->post('complemento'));
			
			if($this->solicitacaodao->adicionar($solicitacao)){
				$this->load->view('topo');

				$this->load->view('solicitacaosucesso');
					
				$this->load->view('rodape');
				
			}else{
				
				echo "Houve um erro no sistema!";
				
			}

			
			

		}


		public function visualizar_solicitacao($id)
	{
				$this->load->view('topo');


				$vlista = $this->solicitacaodao->visualizar_solicitacao($id);
				$vdados = array('vsolicitacao' => $vlista );

				$this->load->view('visualizarsolicitacao', $vdados);
				$this->load->view('rodape');

	}*/
		
	}
