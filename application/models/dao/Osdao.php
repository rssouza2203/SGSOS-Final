<?php 


class Osdao extends CI_Model
{

    function __construct()
    {
        parent::__construct();
     	$this->load->model('os_model');  

    }

    public function listar_oss(){

		return $this->db->get("os")->result_array();

	}

	

	public function adicionar(Os_model $os, $idAnalise){

		$dados['protocoloOS']= $os->getProtocolo();
		$dados['descricaoOS']= $os->getDescricao();
		$dados['dataOS']= $os->getData();
		$dados['idAnalise'] = $idAnalise; 

		return $this->db->insert('os',$dados);

	}

	public function listar_os(){

		$query = $this->db->query("SELECT * FROM os as o 
	INNER JOIN analise as a ON(o.idAnalise = a.idAnalise) 
	INNER JOIN solicitacao as s ON(a.idSolicitacao = s.idSolicitacao)
	INNER JOIN funcionario as f ON(a.idFuncionario = f.idFuncionario)");

		//return $query->result_array();
		return $query->result();

	}


	public function vgerar_os($id){
		
	$query = $this->db->query("SELECT * FROM analise as a 
	INNER JOIN funcionario as f ON(a.idFuncionario = f.idFuncionario) 
	INNER JOIN solicitacao as s ON(a.idSolicitacao = s.idSolicitacao) 

	WHERE a.idAnalise = ".$id."");

		//return $query->result_array();
		return $query->result();
		
	}

	public function visualizar_os($id){
		
	$query = $this->db->query("SELECT * FROM os as o 
	INNER JOIN analise as a ON(o.idAnalise= a.idAnalise)
	INNER JOIN funcionario as f ON(a.idFuncionario = f.idFuncionario)  
	INNER JOIN solicitacao as s ON(a.idSolicitacao = s.idSolicitacao) 

	WHERE o.idOrdemServico = ".$id."");

		//return $query->result_array();
		return $query->result();
		
	}

	public function gerar_relatorio($datainicial,$datafinal)
    {

        $query = $this->db->query("SELECT * FROM os as o 
	INNER JOIN analise as a ON(o.idAnalise = a.idAnalise) 
	INNER JOIN solicitacao as s ON(a.idSolicitacao = s.idSolicitacao)
	INNER JOIN funcionario as f ON(a.idFuncionario = f.idFuncionario)
	WHERE dataOS BETWEEN '". $datainicial."' AND '".$datafinal."'");
        return $query->result();
    }

	

}