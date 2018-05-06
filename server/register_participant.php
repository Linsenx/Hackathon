<?php
  require_once "./include/system.func.php";

  $rtn = [];
  $rtn['error'] = 0;

  if (!strlen($_POST['name']) || !strlen($_POST['gender']) ||!strlen($_POST['age']) ||
      !strlen($_POST['phone']) || !strlen($_POST['school']) ||!strlen($_POST['grade']) ||
      !strlen($_POST['team']) || !strlen($_POST['motto']) 
     ) {
    $rtn['error'] = -1; //信息不全
    $rtn['msg']   = '报名信息不全,请补全后重试!';
    exit(json_encode($rtn));
  }   

  if(!preg_match("/^1[34578]\d{9}$/", $_POST['phone']))
  {
    $rtn['error'] = -1; //信息不全
    $rtn['msg']   = '手机号格式错误 ,请修改后重试!';
    exit(json_encode($rtn));
  }

  try {
    $database->action(function($database) {
      $database->insert("register", [
        "name" => $_POST['name'],
        "gender" => $_POST['gender'],
        "age" => $_POST['age'],
        "phone" => $_POST['phone'],
        "school" => $_POST['school'],
        "grade" => $_POST['grade'],
        "team" => $_POST['team'],
        "motto" => $_POST['motto']
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








