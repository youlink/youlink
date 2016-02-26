<?php
require_once ('lib/Model.php');
class UserModel extends Model {
	protected $tableName = 'user';
	public function create($salutation, $firstName, $lastName, $email, $password, $nickname, $phone, $dateOfBirth) {
		$password = sha1 ( $password );
		
		$query = "INSERT INTO $this->tableName (salutation,firstName, lastName, email, password,nickname,phone,dateOfBirth) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		
		$statement = ConnectionHandler::getConnection ()->prepare ( $query );
		$statement->bind_param ( 'ssssssss', $salutation, $firstName, $lastName, $email, $password, $nickname, $phone, $dateOfBirth );
		
		if (! $statement->execute ()) {
			throw new Exception ( $statement->error );
		}
	}
	public function checkLogin($password, $nickname) {
		$password = sha1 ( $password );
		
		if (check($nickname, "nickname")==$password){
			return true;
		}elseif (check($nickname, "email")==$password){
			return true;
		}else{
			return false;
		}
		
		
		function check($nickname, $nickmail) {
			$query = "Select password From $this->tableName where $nickmail=?";
			$statement = ConnectionHandler::getConnection ()->prepare ( $query );
			$statement->bind_param('s',$password);
			$result = $statement->get_result ();
			$row = $result->fetch_object();
			return $row;
		}
	}
}
