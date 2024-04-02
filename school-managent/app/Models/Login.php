<?php




class Login
{
      private $db;
      private $table = "";

      public function __construct()
      {
            $this->db = new DB();
            $this->db = $this->db->connect();
      }
      public function verify_user($params)
      {
            $username = $this->cleanInput($params['username']);
            $password = $this->cleanInput($params['password']);
            $this->table = $params['role'];
            var_dump($this->table);
            $this->db->where("username", $username);
            $data = $this->db->getOne($this->table);
            if ($this->db->count > 0) {
                  if (password_verify($password, $data['password'])) {
                        return true;
                  }
            }
            return false;
      }



      // Sanitize and validate user inputs
      private function cleanInput($input)
      {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            // Additional validation can be added here
            return $input;
      }
      public function getAllSettings()
      {
            $data = $this->db->get("setting");
            return $data[0];
      }
}
