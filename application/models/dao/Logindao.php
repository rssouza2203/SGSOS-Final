<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logindao extends CI_Model {


    function __construct()
    {
        parent::__construct();   	  
        $this->load->model('login_model');
    }

	

	public function adicionar(login_model $login){

		

		$dados['usuario'] = $login->getUsuario();
		$dados['senha']= $login->getSenha();
		$dados['tipo'] = $login->getTipo();


		return $this->db->insert('login',$dados);
		

	}

	public function alterar_login(login_model $login){

		
		$idlogin = $login->getIdLogin();
		//$dados['usuario'] = $login->getUsuario();
		$dados['senha']= $login->getSenha();
		//$dados['tipo'] = $login->getTipo();

		$this->db->where('idLogin',$idlogin);
		return $this->db->update('login',$dados);
		

	}

	public function visualizar_login($id){
		$this->db->from('login');
		$this->db->where('idLogin',$id);
		return $this->db->get()->result();
	}


	public function busca_login($usuario,$senha){

		$this->db
		->select("*")
		->from("login")
		->where('usuario', $usuario)
		->where('senha', $senha);

		return $this->db->get()->result();

	}

	public function busca_id($usuario){

		$query = $this->db->query("SELECT `idLogin` FROM `login` WHERE usuario = ".$usuario."");


			return $query->row()->idLogin;
	
		}

}