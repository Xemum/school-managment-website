<?php

class Controller
{


      protected $view;

      public function view($template, $params = [])
      {
            $this->view = new View($template, $params);
            return $this->view;
      }
}
