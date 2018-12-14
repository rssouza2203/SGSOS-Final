<?php 


class Solicitantedao extends CI_Model
{

    function __construct()
    {
        parent::__construct();
     	$this->load->model('Solicitante_model');  

    }

	

	public function adicionar(Solicitante_model $solicitante){
		
		$this->load->model('login_model');
		$this->load->model('dao/logindao');

		$dados['nome'] = $solicitante->getNome();
		$dados['cpf']= $solicitante->getCpf();
		$dados['email'] = $solicitante->getEmail();
		
		$dados['idLogin']=$this->logindao->busca_id($solicitante->getCpf()); 

		return $this->db->insert('solicitante',$dados);

	}

	public function listar_solicitantes(){

		return $this->db->get("solicitante")->result_array();

	}

		public function busca_solicitante($idusuario){

		$this->db
		->select("*")
		->from("solicitante")
		->where('idLogin', $idusuario);

		return $this->db->get()->result();

	}


	public function alterar_solicitante(Solicitante_model $solicitante){
		

		$idsolicitante = $solicitante->getIdSolicitante();

		$adados['nome'] = $solicitante->getNome();
		
		$adados['email'] = $solicitante->getEmail();
		
		

		$this->db->where('idSolicitante',$idsolicitante);
		return $this->db->update('solicitante',$adados);

		

	}


	public function visualizar_solicitante($id){
			

		 $query = $this->db->query("SELECT * FROM solicitante as s INNER JOIN login as l ON(s.idLogin = l.idLogin) WHERE s.idSolicitante = ".$id."");

		//return $query->result_array();
		return $query->result();
		
		 
	}

}