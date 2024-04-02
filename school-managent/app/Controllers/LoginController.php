<?php

session_start();
class LoginController extends Controller
{
      private $conn;

      public function __construct()
      {
            $this->conn = new Login();
      }




      public function index()
      {
            return $this->view('auth/login');
      }

      public function verify()
      {
            $status = [];
            if ($_POST) {
                  $username = $_POST['name'];
                  $password = $_POST['pass'];
                  $role = $_POST['role'];
                  $type = '';
                  if ($role == 1) {
                        $role = 'admin';
                        $type = "a";
                  } else if ($role == 2) {
                        $role = 'teachers';
                        $type = "t";
                  } else if ($role == 3) {
                        $role = 'students';
                        $type = "s";
                  } else if ($role == 4) {
                        $role = 'registrar_office';
                        $type = "r";
                  } else return $this->view('error');

                  $dataInsert = array(
                        "username" => $username,
                        "password" => $password,
                        "role" => $role
                  );
                  var_dump($dataInsert);
                  if ($this->conn->verify_user($dataInsert)) {
                        $_SESSION['username'] = $username;
                        $_SESSION['role'] = $role;
                        if ($type == 'a') {
                              header("location: " . BURL . "admin/index");
                        } else if ($type == 't') {
                              header("location: " . BURL . "teacher/index");
                        } else if ($type == 's') {
                              header("location: " . BURL . "student/index");
                        } else if ($type == 'r') {
                              header("location: " . BURL . "registrar_office/index");
                        }
                  } else {
                        $status['error'] = "inccorect username or password ";
                        return $this->view('auth/login', $status);
                  }
            } else {
                  $status['error'] = "404 bad request ";
                  return $this->view('error', $status);
            }
      }
      public function out()
      {
            session_unset();
            session_destroy();

            header("Location: " . BURL);
            exit;
      }
}
