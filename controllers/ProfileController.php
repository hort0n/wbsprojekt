<?php

class ProfileController extends Controller {

	private $pageTpl = '/views/profile.tpl.php';



	public function __construct() {
		
		$this->model = new ProfileModel();
		$this->view = new View();
	}


	public function index() {

		if(empty($_SESSION['user'])) {
            header("Location: /");
            exit();
        }

		$this->pageData['title'] = "Benutzer Profile";
		
		$curId = $_SESSION['id'];
		$curUser = $_SESSION['user'];
		$user = $this->model->info($curUser);

		$this->pageData['id'] = $user['id'];
		$this->pageData['name'] = $user['name'];
		$this->pageData['email'] = $user['email'];
		$this->pageData['motto'] = $user['motto'];
		$this->pageData['gender'] = $user['gender'];
		$this->pageData['ueber_mich'] = $user['ueber_mich'];


		$this->view->render($this->pageTpl, $this->pageData);
		
	}

	public function updateUserInfo(){
		
		if(!empty($_POST['name'])){
			
			$id = $_SESSION['id'];
			$name = $_POST['name'];
			$motto = $_POST['motto'];
			$gender = $_POST['gender'];
			$ueber_mich = $_POST['ueber-mich'];

		
			$this->bereinige($name);
			$this->bereinige($motto);
			$this->bereinige($ueber_mich);

			$res = $this->model->updateInfo($id, $name, $motto, $ueber_mich, $gender);
			if($res){
				$_SESSION['update-success'] =  "* Update erfolgreich!";
			}

			header("Location: /profile");		
		}
	}

	public function updatePassword(){
		
		if(!empty($_POST['password']) && !empty($_POST['wpassword'])){
			
			$id = $_SESSION['id'];
			$password = $_POST['password'];
			$wpassword = $_POST['wpassword'];

			echo "OK";
			$pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/";

			if($password === $wpassword && preg_match($pattern, $password)){

				$password = password_hash($password, PASSWORD_DEFAULT);

				$res = $this->model->updatePassword($id, $password);
				if($res){
					$_SESSION['update-password'] =  "* Passwort update erfolgreich!";
				}


			}

			header("Location: /profile");		
		}
	}


	function bereinige($userEingabe, $encoding = 'UTF-8'){
		return htmlspecialchars(
							strip_tags($userEingabe),
								ENT_QUOTES | ENT_HTML5,
								$encoding 
		);
	}

	public function logout() {
        session_destroy();
        header("Location: /");
		return true;
    }


}