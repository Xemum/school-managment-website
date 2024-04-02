<?php

class Admin
{

      private $db;
      private $table = "admin";
      public function __construct()
      {
            $this->db = new DB();
      }

      //queries
      public function getAllstudent()
      {
            $cols = array("student_id", "fname", "lname", "username", "grade");
            $data = $this->db->connect()->get("students", null, $cols);
            $this->db->connect()->where("grade", $data[0]['grade']);
            $grade = $this->db->connect()->getOne("grades");
            $data[0]['grade'] = $grade['grade_code'] . '-' . $data[0]['grade'];
            return $data;
      }
      public function getStudent($username)
      {
            $data =  $this->db->connect()->where("username", $username)->getOne("students");
            return $data;
      }
}
