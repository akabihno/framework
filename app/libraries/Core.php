<?php
  /*
   * App Core class
   * Creates URL & loads controller
   * /controller/method/params

   */
  class Core {
  	protected $currentController = 'Pages';
  	protected $currentMethod = 'index';
  	protected $params = [];

  	public function __construct(){
  		$this->getUrl()
  	}

  	public function getUrl(){
  		echo $_GET['url'];
  	}

  }