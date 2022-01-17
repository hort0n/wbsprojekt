<?php

class ImpressumController extends Controller {

	private $pageTpl = '/views/impressum.tpl.php';



	public function __construct() {
		
		$this->model = new ImpressumModel();
		$this->view = new View();
	}


	public function index() {

        
        $this->pageData['title'] = "Impressum";
		
        

		$this->view->render($this->pageTpl, $this->pageData);
		
	}
	


}