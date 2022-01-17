<?php

class UserController extends Controller {

	private $pageTpl = '/views/user.tpl.php';



	public function __construct() {
		
		$this->model = new UserModel();
		$this->view = new View();
	}


	public function index() {

		if(empty($_SESSION['user'])) {
            header("Location: /");
            exit();
        }


		$this->pageData['title'] = "User List";


		if(!empty($_POST)){
			$action = explode('-',$_POST['action'])[0];
			switch ($action){
				case 'activateuser' :
					$this->activateUser();
				break;
				case 'lockuser' :
					$this->lockUser();
				break;
				case 'deluser' :
					$this->deleteUser();
				break;				
			}
		}


        $userList = $this->model->getUserList();

        $this->pageData['userList'] = $userList;

		$this->view->render($this->pageTpl, $this->pageData);
		
	}


	public function activateUser(){
		
		if(empty($_SESSION['user'])) {
            header("Location: /");
            exit();
        }

		if(isset($_POST['action']) && isset($_POST['username'])){
			$id = explode('-', $_POST['action'])[1];
			$flag = '1';
			$username = $_POST['username'];

			$status = $this->model->status($id, $flag);
			$this->pageData['activateuser'] = "* Benutzer Konto ".$username." ist activ.";
			return true;
		}
	}


	public function lockUser(){
		
		if(empty($_SESSION['user'])) {
            header("Location: /");
            exit();
        }

		if(isset($_POST['action']) && isset($_POST['username'])){
			$id = explode('-', $_POST['action'])[1];
			$flag = '0';
			$username = $_POST['username'];
			
			$status = $this->model->status($id, $flag);
			$this->pageData['lockuser'] = "* Benutzer Konto ".$username." ist gesperrt.";
			return true;
		}
	}

	public function deleteUser(){

		if(empty($_SESSION['user']) && isset($_POST['username'])) {
            header("Location: /");
            exit();
        }

		if(isset($_POST['action'])){
			$id = explode('-',$_POST['action'])[1];
			$username = $_POST['username'];

			$deluser = $this->model->deluser($id);
			$this->pageData['deluser'] = "* Benutzer Konto ".$username." ist gelöscht.";
			if($deluser){
				return true;
			}
		}
	}



}