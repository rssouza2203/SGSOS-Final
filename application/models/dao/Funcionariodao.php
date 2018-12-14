<?php 


class Funcionariodao extends CI_Model
{

    function __construct()
    {
        parent::__construct();
     	$this->load->model('funcionario_model');  

    }

	

	public function adicionar(Funcionario_model $funcionario){
		$this->load->model('login_model');
		$this->load->model('dao/logindao');

		$dados['nome'] = $funcionario->getNome();
		$dados['matricula']= $funcionario->getMatricula();
		$dados['telefone'] = $funcionario->getTelefone();
		
		$dados['idLogin']=$this->logindao->busca_id($funcionario->getMatricula()); 

		return $this->db->insert('funcionario',$dados);

	}

	public function listar_funcionarios(){

		return $this->db->get("funcionario")->result_array();

	}

	public function busca_funcionario($idusuario){

		$this->db
		->select("*")
		->from("funcionario")
		->where('idLogin', $idusuario);

		return $this->db->get()->result();

	}

	


public function visualizar_funcionario($id){
			
		/*$this->db->select('*');
		$this->db->from('funcionario as f');
		$this->db->join('login as l', 'l.idLogin = f.idLogin');
		$this->db->where('f.idFuncionario', $id);
		

		return $this->db->get()->result_array();*/




		 $query = $this->db->query("SELECT * FROM funcionario as f INNER JOIN login as l ON(f.idLogin = l.idLogin) WHERE f.idFuncionario = ".$id."");

		//return $query->result_array();
		return $query->result();
		
		 
	}


	public function alterar_funcionario(Funcionario_model $funcionario){
		

		$idfuncionario = $funcionario->getIdFuncionario();

		$adados['nome'] = $funcionario->getNome();
		//$adados['matricula']= $funcionario->getMatricula();
		$adados['telefone'] = $funcionario->getTelefone();
		
		

		$this->db->where('idFuncionario',$idfuncionario);
		return $this->db->update('funcionario',$adados);

		

	}

	

}