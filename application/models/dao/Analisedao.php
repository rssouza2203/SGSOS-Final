<?php 


class Analisedao extends CI_Model
{

    function __construct()
    {
        parent::__construct();
     	$this->load->model('analise_model');  

    }

	

	public function adicionar(Analise_model $analise,$idfuncionario,$idsolicitacao){
		

		$dados['dataAnalise']= $analise->getData();
		$dados['idFuncionario'] = $idfuncionario;
		$dados['idSolicitacao']= $idsolicitacao; 




		return $this->db->insert('analise',$dados);

	}





	public function listar_analises(){


		$this->db->select('*');
		$this->db->from('analise as a');
		$this->db->join('solicitacao as s', 'a.idSolicitacao = s.idSolicitacao');
		$this->db->join('funcionario as f', 'a.idFuncionario = f.idFuncionario');
		$this->db->WHERE('s.status = 2');

		return $this->db->get()->result_array();


		

	}


	public function visualizar_analise($id){
		
	$query = $this->db->query("SELECT * FROM analise as a 
	INNER JOIN funcionario as f ON(a.idFuncionario = f.idFuncionario) 
	INNER JOIN solicitacao as s ON(a.idSolicitacao = s.idSolicitacao) 

	WHERE a.idAnalise = ".$id."");

		//return $query->result_array();
		return $query->result();
		
	}


	
}