<?php




class Student
{
      private $db;
      private $table = "students";

      public function __construct()
      {
            $this->db = new DB();
      }

      public function getStudent($username)
      {
            $this->db->connect()->where("username", $username);
            $data = $this->db->connect()->getOne($this->table);
            return $data;
      }

      public function getGrades($username)
      {
            $this->db->connect()->where("username", $username);
            $student_id = $this->db->connect()->get($this->table, null, 'student_id')[0]["student_id"];

            $scores = $this->db->connect()
                  ->orderBy("year", "DESC")
                  ->get("student_score");


            $subjectsinfo = $this->db->connect()->get("subjects");
            $filtered_scores = [];
            foreach ($scores as $score) {
                  // Only consider scores that match the specified student_id
                  if ($score['student_id'] == $student_id) {
                        // Get the subject ID for the current score
                        $subject_id = $score['subject_id'];

                        // Find the corresponding subject information
                        foreach ($subjectsinfo as $subject) {
                              if ($subject['subject_id'] == $subject_id) {
                                    // Append subject information to the current score
                                    $score['subject_info'] = $subject;
                                    break; // Exit the loop once the corresponding subject is found
                              }
                        }

                        // Add the score to the filtered scores array
                        $filtered_scores[] = $score;
                  }
            }

            // Now $filtered_scores contains filtered student scores with appended subject information
            $data['grades'] = $filtered_scores;
            return $data;
      }



      public function checkPassword($params)
      {
            $old_pass = $this->cleanInput($params['old_pass']);
            $new_pass = $this->cleanInput($params['new_pass']);
            $this->db->connect()->where("username", $params["username"]);
            $data = $this->db->connect()->getOne($this->table);
            if (password_verify($old_pass, $data['password'])) {
                  $this->db->connect()->where("username", $params["username"]);
                  $this->db->connect()->update($this->table, array("password" => password_hash($new_pass, PASSWORD_DEFAULT)));
                  return true;
            }
            return false;
      }


      private function cleanInput($input)
      {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            // Additional validation can be added here
            return $input;
      }
}
