<?php
class Os_model extends CI_Model {

	private $idOrdemServico;
	private $protocolo;
	private $descricao;
	private $data;


	function getIdOS(){
		return $this->idOrdemServico;
	}

	function getProtocolo(){
		return $this->protocolo;
	}

	function getDescricao(){
		return $this->descricao;
	}

	function getData(){
		return $this->data;
	}

	function setIdOS($idOrdemServico){
		$this->idOrdemServico = $idOrdemServico;
	}

	function setProtocolo($protocolo){
		$this->protocolo = $protocolo;
	}

	function setDescricao($descricao){
		$this->descricao= $descricao;
	}

	function setData($data){
		$this->data = $data;
	}
} 