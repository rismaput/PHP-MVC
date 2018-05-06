<?php

set_include_path("class/");
spl_autoload_extensions(".class");
spl_autoload_register();


if (!isset($_SERVER['PATH_INFO'])) {
  header('Location: router.php/ControllerForm/ViewForm');
}

$pathInfo = $_SERVER['PATH_INFO'];
$mvc = explode("/", $pathInfo);
$controller = $mvc[1];
$method = $mvc[2];

if (isset($_POST)) {
  $c = new ControllerForm();
  $c->setData($_POST);
  $c->setPic($_FILES);

}

call_user_func(array($c, $method));