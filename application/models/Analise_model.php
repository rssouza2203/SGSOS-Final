	<?php
class Analise_model extends CI_Model {

	private $idAnalise;
	private $data;
	


	function getIdAnalise(){
		return $this->idAnalise;
	}

	function getData(){
		return $this->data;
	}

	function setIdAnalise($idAnalise){
		$this->idAnalise = $idAnalise;
	}

	function setData($data){
		$this->data = $data;
	}

} 