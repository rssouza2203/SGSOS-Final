<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{


	private $idLogin;
	private $usuario;
	private $senha;
	private $tipo;


	function getIdLogin(){
		return $this->idLogin;
	}

	function getUsuario(){
		return $this->usuario;
	}

	function getSenha(){
		return $this->senha;
	}

	function getTipo(){
		return $this->tipo;
	}

	function setIdLogin($idLogin){
		$this->idLogin = $idLogin;
	}

	function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	function setSenha($senha){
		$this->senha = $senha;
	}

	function setTipo($tipo){
		$this->tipo = $tipo;
	}
} 