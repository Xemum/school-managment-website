<?php

session_start();
class AdminController extends Controller
{
      private $conn;

      public function __construct()
      {
            $this->conn = new Admin();
      }



      //routers
      public function index()
      {
            return $this->view('a_dash/index');
      }
      public function teachers()
      {
            return $this->view('a_dash/teachers');
      }
      public function students()
      {
            $data["students"] = $this->conn->getAllstudent();
            return $this->view('a_dash/students', $data);
      }

      public function sview($params)
      {
            $data["student"] = $this->conn->getStudent($params);
            return $this->view('a_dash/view/student', $data);
      }

      public function edits($params)
      {
            $data["student"] = $this->conn->getStudent($params);
            return $this->view('a_dash/edit/student', $data);
      }


      public function message()
      {
            return $this->view('a_dash/message');
      }

      public function grade()
      {
            return $this->view('a_dash/grade');
      }

      public function section()
      {
            return $this->view('a_dash/section');
      }

      public function class()
      {
            return $this->view('a_dash/class');
      }

      public function registrarOffice()
      {
            return $this->view('a_dash/registrar-office');
      }

      public function course()
      {
            return $this->view('a_dash/course');
      }

      public function settings()
      {
            return $this->view('a_dash/settings');
      }


      //view
      public function viewstudent($params)
      {
            $data['student'] = $this->conn->getStudent($params);
            return $this->view('a_dash/view-student', $data);
      }







      //updates

      // public function supdate($params)
      // {
      //       if (
      //             isset($_SESSION['admin_id']) &&
      //             isset($_SESSION['role'])
      //       ) {

      //             if ($_SESSION['role'] == 'Admin') {


      //                   if (
      //                         isset($_POST['fname'])      &&
      //                         isset($_POST['lname'])      &&
      //                         isset($_POST['username'])   &&
      //                         isset($_POST['student_id']) &&
      //                         isset($_POST['address'])    &&
      //                         isset($_POST['email_address']) &&
      //                         isset($_POST['gender'])        &&
      //                         isset($_POST['date_of_birth']) &&
      //                         isset($_POST['section'])       &&
      //                         isset($_POST['parent_fname'])  &&
      //                         isset($_POST['parent_lname'])  &&
      //                         isset($_POST['parent_phone_number']) &&
      //                         isset($_POST['grade'])
      //                   ) {

      //                         include '../../DB_connection.php';
      //                         include "../data/student.php";

      //                         $fname = $_POST['fname'];
      //                         $lname = $_POST['lname'];
      //                         $uname = $_POST['username'];

      //                         $address = $_POST['address'];
      //                         $gender = $_POST['gender'];
      //                         $section = $_POST['section'];
      //                         $email_address = $_POST['email_address'];
      //                         $date_of_birth = $_POST['date_of_birth'];
      //                         $parent_fname = $_POST['parent_fname'];
      //                         $parent_lname = $_POST['parent_lname'];
      //                         $parent_phone_number = $_POST['parent_phone_number'];

      //                         $student_id = $_POST['student_id'];

      //                         $grade = $_POST['grade'];

      //                         $data = 'student_id=' . $student_id;

      //                         if (empty($fname)) {
      //                               $em  = "First name is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($lname)) {
      //                               $em  = "Last name is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($uname)) {
      //                               $em  = "Username is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (!unameIsUnique($uname, $conn, $student_id)) {
      //                               $em  = "Username is taken! try another";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($address)) {
      //                               $em  = "Address is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($gender)) {
      //                               $em  = "Gender is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($email_address)) {
      //                               $em  = "Email address is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($date_of_birth)) {
      //                               $em  = "Date of birth is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($parent_fname)) {
      //                               $em  = "Parent first name is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($parent_lname)) {
      //                               $em  = "Parent last name is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($parent_phone_number)) {
      //                               $em  = "Parent phone number is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else if (empty($section)) {
      //                               $em  = "Section is required";
      //                               header("Location: ../student-edit.php?error=$em&$data");
      //                               exit;
      //                         } else {
      //                               $sql = "UPDATE students SET
      //           username = ?, fname=?, lname=?, grade=?, address=?,gender = ?, section=?, email_address=?, date_of_birth=?, parent_fname=?,parent_lname=?,parent_phone_number=?
      //           WHERE student_id=?";
      //                               $stmt = $conn->prepare($sql);
      //                               $stmt->execute([$uname, $fname, $lname, $grade, $address, $gender, $section, $email_address, $date_of_birth, $parent_fname, $parent_lname, $parent_phone_number, $student_id]);
      //                               $sm = "successfully updated!";
      //                               header("Location: ../student-edit.php?success=$sm&$data");
      //                               exit;
      //                         }
      //                   } else {
      //                         $em = "An error occurred";
      //                         header("Location: ../student.php?error=$em");
      //                         exit;
      //                   }
      //             } else {
      //                   header("Location: ../../logout.php");
      //                   exit;
      //             }
      //       } else {
      //             header("Location: ../../logout.php");
      //             exit;
      //       }
      // }
}
