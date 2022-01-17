<?php

class GuestbookController extends Controller {

	private $pageTpl = '/views/guestbook.tpl.php';



	public function __construct() {
		
		$this->model = new GuestbookModel();
		$this->view = new View();
	}


	public function index() {

		$this->pageData['title'] = "Gästebuch";

		if(!empty($_POST)) {
			$action = $_POST['action'];
			
			switch($action){

				case 'newpost':
					if($this->postnewmsg()){
						$this->pageData['newpost'] = '* Post erstellt.';
						/* header("Location: /guestbook"); */		
					}
				break;
				case 'delpost':
					
					if($this->delpost()){
						$this->pageData['delpost'] = '* Post gelöscht.';
						/* header("Location: /guestbook"); */
					}
				break;

			}
		}

		$text = $this->model->readAll();
		$this->pageData['content'] = $text;


		$this->view->render($this->pageTpl, $this->pageData);
		
	}

	public function postnewmsg(){
		
		if(!empty($_POST)){
			
			$id = $_SESSION['id'];
			$newTitle = $_POST['postTitle'];
			$newPost = $_POST['postText'];
			$this->bereinige($newTitle);
			$this->bereinige($newPost);

			$this->model->newPost($id, $newTitle, $newPost);

			return true;
		}
	}

	public function delpost(){


		$postid = explode('-', $_POST['postid'])[1];

		$this->model->delPost($postid);

		return true;
		

	}

	function bereinige($userEingabe, $encoding = 'UTF-8'){
		return htmlspecialchars(
							strip_tags($userEingabe),
								ENT_QUOTES | ENT_HTML5,
								$encoding 
		);
	}




}