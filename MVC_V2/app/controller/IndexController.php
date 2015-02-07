<?php

class IndexController extends Controller 
{
   public function __construct() {
      $this->view->list = Item::getList();
      $this->view->display();
   }

}
