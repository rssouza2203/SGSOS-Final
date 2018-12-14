<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitacao extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        
			$this->load->model('solicitacao_model');
			$this->load->model('dao/solicitacaodao');
			

    }


	public function index()
	{
				$this->load->view('topo');


				$lista = $this->solicitacaodao->listar_solicitacoes();
				$dados = array('solicitacao' => $lista );

				$this->load->view('solicitacoes', $dados);
				$this->load->view('rodape');

	}


public function listar_solicitacoes_func()
	{
				$this->load->view('topo');


				$lista = $this->solicitacaodao->listar_solicitacoes_func();
				$dados = array('solicitacao' => $lista );

				$this->load->view('solicitacoes', $dados);
				$this->load->view('rodape');

	}


public function adicionar_solicitacao()
	{
				$this->load->view('topo');


				$this->load->view('adicionarsolicitacao');
				$this->load->view('rodape');

	}

	public function inserir_solicitacao()
	{
			


		$this->load->library('form_validation');

		$this->form_validation->set_rules('rua','Rua',
			'required|min_length[3]|max_length[100]');

		$this->form_validation->set_rules('numero','Numero',
			'required|min_length[1]');

		$this->form_validation->set_rules('complemento','Complemento',
			'min_length[1]|max_length[32]');

		$this->form_validation->set_rules('bairro','Bairro',
			'required|min_length[5]|max_length[32]');

		$this->form_validation->set_rules('cep','CEP',
			'numeric|required|exact_length[8]');

		$this->form_validation->set_rules('descricao','Descrição',
			'min_length[5]|max_length[512]');


		if ($this->form_validation->run() == FALSE){
			$this->adicionar_solicitacao();
		}else{



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

		}


		public function visualizar_solicitacao($id)
	{
				$this->load->view('topo');


				$vlista = $this->solicitacaodao->visualizar_solicitacao($id);
				$vdados = array('vsolicitacao' => $vlista );

				$this->load->view('visualizarsolicitacao', $vdados);
				$this->load->view('rodape');

	}
		
	public function busca_solicitacoes($id)
	{
				$this->load->view('topo');


				$lista = $this->solicitacaodao->busca_solicitacao($id);
				$dados = array('solicitacao' => $lista );

				$this->load->view('solicitacoes', $dados);
				$this->load->view('rodape');

	}


public function relatorio_solicitacoes()
	{
				$this->load->view('topo');
				$this->load->view('relatoriossolicitacao');
				$this->load->view('rodape');

	}


public function gerar_relatorio()
	{
		
		$datainicial = $this->input->post('datainicial');
        $datafinal = $this->input->post('datafinal');
         $lista = $this->solicitacaodao->gerar_relatorio($datainicial,$datafinal);
         $dados = array('solicitacao' => $lista );

    $html = $this->load->view('imprimirsolicitacoes', $dados, TRUE);

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
