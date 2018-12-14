<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitacaodao extends CI_Model
{

    function __construct()
    {
        parent::__construct();
     	$this->load->model('solicitacao_model');  

    }

	

	public function adicionar(solicitacao_model $solicitacao){
		

		$dados['descricao'] = $solicitacao->getDescricao();
		$dados['tipoSolicitacao']= $solicitacao->getTipoSolicitacao();
		$dados['protocolo'] = $solicitacao->getProtocolo();
		$dados['status'] = $solicitacao->getStatus();
		$dados['data'] = $solicitacao->getData();
		$dados['cep'] = $solicitacao->getCep();
		$dados['rua'] = $solicitacao->getRua();
		$dados['numero'] = $solicitacao->getNumero();
		$dados['complemento'] = $solicitacao->getComplemento();
		$dados['bairro'] = $solicitacao->getBairro();
		$dados['idSolicitante'] = $this->session->userdata('usuario')->idSolicitante;//session id do solicitante;

		return $this->db->insert('solicitacao',$dados);

	}


	public function listar_solicitacoes(){

		return $this->db->get("solicitacao")->result_array();

	}

	public function listar_solicitacoes_func(){


		$this->db->select('*');
		$this->db->from('solicitacao as s');
		$this->db->WHERE('s.status = 1');

		return $this->db->get()->result_array();

	}



	public function visualizar_solicitacao($id){
		$this->db->from('solicitacao');
		$this->db->where('idSolicitacao',$id);
		return $this->db->get()->result();
	}
	

	public function busca_solicitacao($id){
		$this->db->from('solicitacao');
		$this->db->where('idSolicitante',$id);

		return $this->db->get()->result_array();
	}

	public function alterar_status($idsolicitacao,$status){
		$dados['status']=$status;
		$this->db->where('idSolicitacao',$idsolicitacao);
		return $this->db->update('solicitacao',$dados);
		
	}

 	public function gerar_relatorio($datainicial,$datafinal)
    {

        $query = $this->db->query("SELECT * FROM solicitacao WHERE data BETWEEN '". $datainicial."' AND '".$datafinal."'");
        return $query->result();
    }
	


}