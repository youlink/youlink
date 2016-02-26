

<?php
class LoginController {
	public function __construct() {
		$view = new View ( 'header', array (
				'title' => 'Login',
				'heading' => 'Login' 
		) );
		$view->display ();
	}
	
	public function index()
	{
		$view = new View('user_login');
		$view->display();
	}
	
	public function doLogin() {
		$view = new View ( 'user_login' );
		
		if(empty($POST['email'])||empty($POST['password'])){
			$view = new View ( 'user_login' );
			$view->ErrorMessage = "Email or password invalid!";
			$view->display();
			return;
		}else{
			$UserModel = new UserModel();
			
			$email = $_POST ['email'];
			$password = $_POST ['password'];
			
			if($UserModel->checkLogin($password,$email)){
				$_SESSION ["UserID"] = $permissionResult->getUserId();
				$_SESSION ["IsAuthenticated"] = "true";
				
				header ( "Location: /user" );
				return;
			}else {
				$view = new View ( 'user_login' );
				$view->ErrorMessage = "Email or password invalid!";
				$view->display();
				return;
			}
			
		}
	}
	public function __destruct() {
		$view = new View ( 'footer' );
		$view->display ();
	}
}