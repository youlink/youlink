<?php

require_once('model/UserModel.php');

class UserController
{

	public function __construct()
	{
		$view = new View('header', array('title' => 'Benutzer', 'heading' => 'Benutzer'));
		$view->display();
	}

	public function index()
	{
		$userModel = new UserModel();

		$view = new View('user_index');
		$view->users = $userModel->readAll();
		$view->display();
	}

	public function create()
	{
		$view = new View('user_create');
		$view->display();
	}

	public function doCreate()
	{
		if ($_POST['send']) {
			$salutation = htmlspecialchars($_POST['salutation']);
			$firstName  = htmlspecialchars($_POST['firstName']);
			$lastName   = htmlspecialchars($_POST['lastName']);
			$email      = htmlspecialchars($_POST['email']);
			$password   = htmlspecialchars($_POST['password']);
			$nickname   = htmlspecialchars($_POST['nickname']);
			$phone      = htmlspecialchars($_POST['phone']);
			$dateOfBirth= htmlspecialchars($_POST['dateOfBirth']);

			$userModel = new UserModel();
			$userModel->create($salutation, $firstName, $lastName, $email, $password ,$nickname ,$phone ,$dateOfBirth);
		}

		$this->index();
	}

	public function delete($id)
	{
		$userModel = new UserModel();
		$userModel->deleteById($id);

		$this->index();
	}
	
	public function login() {
		$view = new View ( 'login' );
		$view->display ();
	}
	public function logout() {
		session_destroy ();
		unset ( $_SESSION ["IsAuthenticated"] );
		$view = new View ( 'login' );
		$view->display ();
		header ( "Refresh:0" );
	}
	public function doLogin() {
		$view = new View ( 'login' );
	
		if (!empty( $_POST ['email'] ) && !empty( $_POST ['password'] )) {
				
			$email = $_POST ['email'];
			$password = $_POST ['password'];
				
				
			$userModel = new UserModel ();
			$permissionResult = $userModel->checkPermission( $email, $password );
			if ($permissionResult->isLoggedIn()) {
	
				$_SESSION ["UserID"] = $permissionResult->getUserId();
				$_SESSION ["IsAuthenticated"] = "true";
				$_SESSION ["registering"] = "false";
				header ( "Location: /home" );
				return;
	
			} else {
				$view = new View ( 'login' );
				$view->ErrorMessage = "Email or password invalid!";
				$view->display();
				return;
			}
		}
	
		$view->ErrorMessage = "Email or password not set!";
		$view->display ();
	}

	public function __destruct(){
		$view = new View('footer');
		$view->display();
	}
}
