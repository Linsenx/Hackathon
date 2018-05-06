<?php
  require_once "./include/system.func.php";

  $rtn = [];
  $rtn['error'] = 0;

  if (!strlen($_POST['c1']) || !strlen($_POST['c2']) ||!strlen($_POST['c3']) ||
      !strlen($_POST['c4']) || !strlen($_POST['c5']) ||!strlen($_POST['c6']) ||
      !strlen($_POST['c7']) || !strlen($_POST['d1'])
     ) {
    $rtn['error'] = -1; //信息不全
    $rtn['msg']   = '报名信息不全,请补全后重试!';
    exit(json_encode($rtn));
  }   

  try {
    $database->action(function($database) {
      $database->insert("spectator", [
        "c1" => $_POST['c1'],
        "c2" => $_POST['c2'],
        "c3" => $_POST['c3'],
        "c4" => $_POST['c4'],
        "c5" => $_POST['c5'],
        "c6" => $_POST['c6'],
        "c7" => $_POST['c7'],
        "d1" => $_POST['d1'],
        "d2" => $_POST['d2']
      ]);
    });
    $rtn['error'] = 1; //注册成功
    $rtn['msg']   = '报名信息提交成功';
    exit(json_encode($rtn));
  } catch (Exception $e) {
    $rtn['error'] = -2; //数据库出错
    $rtn['msg']   = '服务器错误';
    exit(json_encode($rtn));
  }








