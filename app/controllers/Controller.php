<?php
    namespace mvc2020\Controllers;
      

    class Controller
    {
        public function __construct()
        {
            $this->view = new \MVC2020\Core\View();  
        }
    }