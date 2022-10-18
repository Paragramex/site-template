<?php 
class LoginUser{
	// class properties
	private $username;
	private $password;
	public $error;
	public $success;
	private $storage = __DIR__ . "/../../data/accounts.json";
	private $stored_users;
	//private $email;

	// class methods
	public function __construct($username, /* $email,*/ $password){
		$this->username = $username;
		//$this->email = $email;
		$this->password = $password;
		$this->stored_users = json_decode(file_get_contents($this->storage), true);
		$this->login();
	}


	private function login(){
		foreach ($this->stored_users as $user) {
			if($user['username'] == $this->username /* && $user['email'] == $this->email */){
				if(password_verify($this->password, $user['password'])){
					session_start();
					$_SESSION['user'] = $this->username;
					$person = $_SESSION['user'];
					setcookie("user", $person, time() + (86400 * 30), "paragram.repl.co");
					
					header("location: /"); exit();
				}
			}
		}
		return $this->error = "Wrong username or password";
	}

}