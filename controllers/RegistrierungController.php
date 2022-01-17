<?php

class RegistrierungController extends Controller {

	private $pageTpl = '/views/registrierung.tpl.php';



	public function __construct() {
		
		$this->model = new RegistrierungModel();
		$this->view = new View();
	}


	public function index() {

        
        $this->pageData['title'] = "Registrierungsseite";
		
        if(!$this->checkExistsUser()){
            
            if($this->regNewUser()){

                $this->pageData['reg-erfolgrech'] = '* Benutzer erfolgreich registriert';
                /* header("Location: /"); */
            }

        }

		$this->view->render($this->pageTpl, $this->pageData);
		
	}

    public function checkExistsUser(){

        if(isset($_POST['email'])){
            $email = trim(strip_tags($_POST['email']));
            $user = $this->model->checkUser($email);
            if($user){
                $this->pageData['exist-user'] = "* Benutzer mit E-Mail " .$email. " exestiert bereits";
                return true;
            }
        }
    }

    public function regNewUser(){
    
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['wpassword'])){
                $name = trim(strip_tags($_POST['name']));
                $email = trim(strip_tags($_POST['email']));
                $password = trim(strip_tags($_POST['password']));
                $wpassword = trim(strip_tags($_POST['wpassword']));
                
                if($password === $wpassword){

                    $pattern = array();        
                    /* $pattern["name"] = "/^[A-Za-z][A-Za-z0-9]{5,31}$/"; */
                    $pattern['name'] = "/^[A-Za-z]{4,}$/";
                    /* $pattern["password"] = "/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/"; */
                    $pattern['password'] = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/";
                    $pattern['email'] = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]+$/";
                    
                    if(preg_match($pattern['name'], $name) &&
                        preg_match($pattern['email'], $email) &&
                        preg_match($pattern['password'], $password)){

                        $password = password_hash($password, PASSWORD_DEFAULT);
                            
                        $this->model->registration($name, $email, $password);
                        
                        return true;
                    }

                }else{
                    $this->pageData['passwoerter-ungleich'] = "* Passwörter stimmen nicht überein...";
                }
                return false;
            }

    }

	


}