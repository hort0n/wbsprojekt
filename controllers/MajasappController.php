<?php

class MajasappController extends Controller {

	private $pageTpl = '/views/majasapp.tpl.php';



	public function __construct() {
		
		$this->model = new MajasappModel();
		$this->view = new View();
	}


	public function index() {


		$this->pageData['title'] = "Majas app";
		

		$this->view->render($this->pageTpl, $this->pageData);
		
	}

}