<?php

session_start();
class StudentController extends Controller
{
      private $conn;

      public function __construct()
      {
            $this->conn = new Student();
      }




      public function index()
      {
            return $this->view('s_dash/index');
      }

      public function grades()
      {
            $username = $_SESSION['username'];
            $data["grades"] = $this->conn->getGrades($username);
            return $this->view('s_dash/grades', $data);
      }

      public function password()
      {
            return $this->view('s_dash/password');
      }

      public function checkpass()
      {

            $username = $_SESSION['username'];
            if ($_POST) {
                  $oldpass = $_POST['old_pass'];
                  $newpass = $_POST['new_pass'];
                  $c_newpass = $_POST['c_new_pass'];
            } else {
                  $data['error'] = "server error";
                  return $this->view('s_dash/password', $data);
            }
            if ($newpass != $c_newpass) {
                  $data['error'] = "password not match";
                  return $this->view('s_dash/password', $data);
            }
            $params = array(
                  "old_pass" => $oldpass,
                  "new_pass" => $newpass,
                  "username" => $username
            );
            if ($this->conn->checkPassword($params)) {
                  $data['succes'] = "password changed successfully ";
                  return $this->view('s_dash/password', $data);
            } else {
                  $data['error'] = "inccorect old password";
                  return $this->view('s_dash/password', $data);
            }
      }
}
