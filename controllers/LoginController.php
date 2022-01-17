<?php

class LoginController extends Controller {

	private $pageTpl = '/views/login.tpl.php';



	public function __construct() {
		
		$this->model = new LoginModel();
		$this->view = new View();
	}


	public function index() {

        if(isset($_SESSION['user'])) {
            header("Location: /");
            exit();
        }
        


        $this->pageData['title'] = "Login Page";
		
		if(isset($_POST['loginName']) && isset($_POST['loginPasswort'])){
            $email = trim(strip_tags($_POST['loginName']));
            $password = trim(strip_tags($_POST['loginPasswort']));
         
            $user = $this->model->checkUser($email);
            
            if($user['flag'] != 0){

                if($user && password_verify($password, $user['passwort'])){
                    
                    $_SESSION['meldung'] = $user['name'];
                    $_SESSION['user'] = $user['name'];
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['rolle'] = $user['rolle'];
                    header("Location: /");
                    
                }else{
                    $_SESSION['meldung'] = "* falsche login daten";
                    header("Location: /login");
                }

            }else{
                $_SESSION['meldung'] = "* deine konto ist gesperrt, bitte an admin wenden";
                header("Location: /login");
            }
        }


        

		$this->view->render($this->pageTpl, $this->pageData);
		
	}
	


}