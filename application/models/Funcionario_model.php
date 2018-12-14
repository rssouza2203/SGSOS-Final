<?php
class Funcionario_model extends CI_Model {

	private $idFuncionario;
	private $nome;
	private $matricula;
	private $telefone;
	
   

	function getIdFuncionario(){
		return $this->idFuncionario;
	}

	function getNome(){
		return $this->nome;
	}

	function getMatricula(){
		return $this->matricula;
	}

	function getTelefone(){
		return $this->telefone;
	}

	

	function setIdFuncionario($idFuncionario){
		$this->idFuncionario = $idFuncionario;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	
} 