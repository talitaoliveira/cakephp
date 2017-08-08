<?php

class PostsController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index () {
		die("index posts");
	}

}