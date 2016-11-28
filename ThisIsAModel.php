<?php

require_once("ThisIsASecondModel.php");

class ThisIsAModel {

	private $m_secondModel;

	public function __construct() {
		$this->m_secondModel = new ThisIsASecondModel();
	}

	public function GetString() {
		return "<h1>" . $this->m_secondModel->GetString() . "</h1>";
	}
}
?>
