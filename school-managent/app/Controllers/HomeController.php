<?php


class HomeController extends Controller
{
      public function index()
      {
            $db = new Login();
            $data["settings"] = $db->getAllSettings();
            $this->view('home', $data);
      }
}
