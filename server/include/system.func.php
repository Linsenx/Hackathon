<?php
  header('Access-Control-Allow-Origin:*');
  define("ROOT", substr(__DIR__, 0, -7));
  date_default_timezone_set("Etc/GMT-8");

  //数据库配置
  require_once ROOT."config.inc.php";
  require_once ROOT."include/Medoo.class.php";
  $database = new Medoo\Medoo([
    'database_type' => 'mysql',
    'database_name' => $dbname,
    'server' => $dbhost,
    'username' => $dbuser,
    'password' => $dbpass,
    'charset' => 'utf8',
    'port' => 3306,
  ]);