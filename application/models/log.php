<?php

class Log extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function message($level, $message) {
		$level = strtoupper($level);
		echo "$level: $message";
	}

}