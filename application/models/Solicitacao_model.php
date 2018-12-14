<?php
class Solicitacao_model extends CI_Model {


	private $idSolicitacao;
	private $descricao;
	private $tipoSolicitacao;
	private $protocolo;
	private $status;
	private $data;
	private $cep;
	private $rua;
	private $numero;
	private $complemento;
	private $bairro;
   

	function getIdSolicitacao(){
		return $this->idSolicitacao;
	}

	function getDescricao(){
		return $this->descricao;
	}

	function getTipoSolicitacao(){
		return $this->tipoSolicitacao;
	}

	function getProtocolo(){
		return $this->protocolo;
	}

	function getStatus(){
		return $this->status;
	}
	
	function getData(){
		return $this->data;
	}

	function getCep(){
		return $this->cep;
	}

	function getRua(){
		return $this->rua;
	}

	function getNumero(){
		return $this->numero;
	}

	function getComplemento(){
		return $this->complemento;
	}

	function getBairro(){
		return $this->bairro;
	}

	function setIdSolicitacao($idSolicitacao){
		$this->idSolicitacao = $idSolicitacao;
	}

	function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	function setTipoSolicitacao($tipoSolicitacao){
		$this->tipoSolicitacao = $tipoSolicitacao;
	}

	function setProtocolo($protocolo){
		
		$this->protocolo = $protocolo;
	}

	function setStatus($status){
		$this->status = $status;
	}

	function setData($data){
		$this->data = $data;
	}

	function setCep($cep){
		$this->cep = $cep;
	}

	function setRua($rua){
		$this->rua = $rua;
	}

	function setNumero($numero){
		$this->numero = $numero;
	}

	function setComplemento($complemento){
		$this->complemento = $complemento;
	}

	function setBairro($bairro){
		$this->bairro = $bairro;
	}
} 