<?php

require_once "../../vendor/autoload.php";
require_once "../../Main.php";

  class Top extends Main {
    public function index(){

      $data = array(
        "title" => "昭栄電気産業",
        );
        $this -> view("business/gas-engineer/index.twig",$data);
    }
  }
  $top = new Top();
  $top -> index();
