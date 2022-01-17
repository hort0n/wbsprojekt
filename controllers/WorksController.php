<?php

class WorksController extends Controller {

	private $pageTpl = '/views/works.tpl.php';



	public function __construct() {
		
		$this->model = new WorksModel();
		$this->view = new View();
	}


	public function index() {


		$this->pageData['title'] = "Works";
		

		$this->view->render($this->pageTpl, $this->pageData);
		
	}

}