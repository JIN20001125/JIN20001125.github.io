<?php

class Main{
  //twigファイルの呼び出し処理
  public function topView($file,$data){
    $loader = new Twig_Loader_Filesystem('./view');
    $twig = new Twig_Environment($loader);
    echo $twig ->render($file,$data);
  }

  //twigファイルの呼び出し処理
  public function view($file,$data){
    $loader = new Twig_Loader_Filesystem('../../view');
    $twig = new Twig_Environment($loader);
    echo $twig ->render($file,$data);
  }

  public function view2($file,$data){
    $loader = new Twig_Loader_Filesystem('../../../view');
    $twig = new Twig_Environment($loader);
    echo $twig ->render($file,$data);
  }

  public function view3($file,$data){
    $loader = new Twig_Loader_Filesystem('../view');
    $twig = new Twig_Environment($loader);
    echo $twig ->render($file,$data);
  }

  //twigファイルの呼び出し処理
  public function login($file,$data){
    $loader = new Twig_Loader_Filesystem('./');
    $twig = new Twig_Environment($loader);
    echo $twig ->render($file,$data);
  }

  //POST処理をサニタイズ
  public function post($key){
    if(empty($_POST[$key])){
      return NULL;
    }
    return htmlspecialchars($_POST[$key]);
  }
}
