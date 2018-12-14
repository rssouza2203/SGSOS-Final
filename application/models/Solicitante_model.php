<?php
class Solicitante_model extends CI_Model {

	private $idSolicitante;
	private $nome;
	private $cpf;
	private $email;
	
   

	function getIdSolicitante(){
		return $this->idSolicitante;
	}

	function getNome(){
		return $this->nome;
	}

	function getCpf(){
		return $this->cpf;
	}

	function getEmail(){
		return $this->email;
	}

	

	function setIdSolicitante($idSolicitante){
		$this->idSolicitante = $idSolicitante;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function setCpf($cpf){
		$this->cpf = $cpf;
	}

	function setEmail($email){
		$this->email = $email;
	}

	
} 