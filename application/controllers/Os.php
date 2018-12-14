<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Os extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        
			$this->load->model('os_model');
			$this->load->model('dao/osdao');

    }


	public function index()
	{
				$this->load->view('topo');


				$lista = $this->osdao->listar_os();
				$dados = array('os' => $lista );

				$this->load->view('oss', $dados);
				$this->load->view('rodape');

	}


		public function gerar_os()
	{
			$this->load->model('solicitacao_model');
			$this->load->model('dao/solicitacaodao');
			$this->load->model('analise_model');
			$this->load->model('dao/analisedao');


			$os = new Os_model();

			

			$idanalise = ($this->input->post('idanalise'));
			$idsolicitacao = ($this->input->post('idsolicitacao'));

			$os->setDescricao($this->input->post('descricaoos'));

			$os->setData(date('Y-m-d H:i:s'));
			$os->setProtocolo(date('mdHis'));

			$status="3";
			
			if($this->osdao->adicionar($os,$idanalise) && $this->solicitacaodao->alterar_status($idsolicitacao,$status)){
				$this->load->view('topo');

				$this->load->view('gerarossucesso');
					
				$this->load->view('rodape');
				
			}else{
				
				echo "Houve um erro no sistema!";
				
			}

			
			

		}


		public function vgerar_os()
	{
				$this->load->view('topo');



				$idanaliseos = ($this->input->post('idanalise'));
				$olista = $this->osdao->vgerar_os($idanaliseos);
				$odados = array('vos' => $olista );

				$this->load->view('geraros', $odados);
				$this->load->view('rodape');

	}


	public function visualizar_os($id)
	{
				$this->load->view('topo');


				$olista = $this->osdao->visualizar_os($id);
				$odados = array('vos' => $olista );

				$this->load->view('visualizaros', $odados);
				$this->load->view('rodape');

	}


public function finalizar_os($id)
	{

			$this->load->model('solicitacao_model');
			$this->load->model('dao/solicitacaodao');

				$status="5";
			
			if($this->solicitacaodao->alterar_status($id,$status)){
				$this->load->view('topo');

				$this->load->view('finalizarossucesso');
					
				$this->load->view('rodape');
				
			}else{
				
				echo "Houve um erro no sistema!";
				
			}
	}

	public function relatorio_oss()
	{
				$this->load->view('topo');
				$this->load->view('relatoriosos');
				$this->load->view('rodape');

	}



	public function gerar_relatorio()
	{
		
		$datainicial = $this->input->post('datainicial');
        $datafinal = $this->input->post('datafinal');
         $lista = $this->osdao->gerar_relatorio($datainicial,$datafinal);
         $dados = array('os' => $lista );

    $html = $this->load->view('imprimiross', $dados, TRUE);

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
