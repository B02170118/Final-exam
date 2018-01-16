<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class User_model extends CI_Model {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->database();

	}

	/**
	 * create_user function.
	 *
	 * @access public
	 * @param mixed $username
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function create_user($username,$password) {
		$sql =  "SELECT * FROM `users` WHERE `username`='$username';";
		if ($this->db->query($sql)->num_rows() === 1)
		{
		return true;
		}
		else
		{
			$sql = "INSERT INTO users (username, password) VALUES (".$this->db->escape($username).", ".$this->db->escape($password).")";
			$requery = $this->db->query($sql);
			return false;
		}

	}

	/**
	 * resolve_user_login function.
	 * @return bool true on success, false on failure
	 */
	public function resolve_user_login($username, $password) {
		$sql =  "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password';";
		$query = $this->db->query($sql);
		if( $query->num_rows() === 1){
			return true ;
		}
		else {
			return false;
		}

	}

	public function table_user($username,$lamb,$ferr,$koni,$money){
		$sql = "INSERT INTO mnytb (username, money, Lamborghini, Ferrari, Koenigsegg) VALUES (".$this->db->escape($username).",".$this->db->escape($money).", ".$this->db->escape($lamb).",".$this->db->escape($ferr).",".$this->db->escape($koni).")";
		$requery = $this->db->query($sql);
		return;
	}

}
