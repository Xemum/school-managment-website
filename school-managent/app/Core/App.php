<?php


class App
{

      // controller
      protected $controller = "HomeController";
      // method 
      protected $action = "index";
      // params 
      protected $params = [];

      public function __construct()
      {

            $this->prepareURL($_SERVER['REQUEST_URI']);
            echo "<p style='color:black'>controller : " . $this->controller . "</p>";
            echo "<p style='color:black'>action : " . $this->action . "</p>";
            echo "<p style='color:black'>params : " . print_r($this->params, true) . "</p>";
            // invoke controller and method
            $this->render();
      }


      /*
problem with this is in the url explode since it path/public/controller/action/data


*/

      private function prepareURL($url)
      {
            $url = trim($url, '/');
            if (!empty($url)) {
                  $url = explode('/', $url);
                  $this->controller = isset($url[2]) ? ucwords($url[2]) . 'Controller' : 'HomeController';
                  $this->action = isset($url[3]) ? $url[3] : 'index';
                  $this->params = array_slice($url, 4);
            }
      }

      private function render()
      {
            if (file_exists(CONTROLLERS . $this->controller . '.php')) {
                  // chaeck if controller is exist
                  if (class_exists($this->controller)) {
                        $controller = new $this->controller;
                        // check if methos is exist
                        if (method_exists($controller, $this->action)) {
                              call_user_func_array([$controller, $this->action], $this->params);
                        } else {
                              // echo "Method : " . $this->action ." does not Exist";
                              new View('error');
                        }
                  } else {
                        // echo "Class : ".$this->controller." Not Found";
                        new View('error');
                  }
            } else {
                  // echo "Controller : ".$this->controller." Not Found";
                  new View('error');
            }
      }
}
