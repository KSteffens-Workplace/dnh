<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Kay
 */
class lController {

	protected $f3;
	protected $db;

	function beforeroute() {

	}

	function afterroute() {
		echo Template::instance()->render('layout.html');
	}

	function __construct() {
		$f3 = Base::instance();
		$db = new DB\SQL(
				$f3->get('db_dns') . $f3->get('db_name'), $f3->get('db_user'), $f3->get('db_pass')
		);

		$this->f3 = $f3;
		$this->db = $db;
	}


}
