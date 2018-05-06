<?php
require_once "./include/system.func.php";

if (!array_key_exists('user', $_COOKIE) || !array_key_exists('pass', $_COOKIE))
{
  ProcessBoforeRender();
  include ROOT."template/adminlogin.html";
}
else if (strcmp($admin_user, $_COOKIE['user']) == 0 && strcmp($admin_pass, $_COOKIE['pass']) == 0) 
{
  ProcessBoforeRender();
  include ROOT."template/admin.html";
  ProcessAfterRender();
}
else 
{
  exit("Access denied.");
} 

function ProcessBoforeRender()
{
  global $admin_user, $admin_pass, $database, $register_num, $html_table;

  $command = array_key_exists('command', $_POST) ? $_POST['command'] : '' ;
  switch($command)
  {
    case 'login':
      if ($_POST['user'] == $admin_user && $_POST['pass'] == $admin_pass)
      {
        setcookie("user", $_POST['user']);
        setcookie("pass", $_POST['pass']);
      }
      break;
  }

  if (array_key_exists('information', $_GET))
  {
    $datas = $database->select("register", "*");
    $register_num = count($datas);

    $html_table = "";
    $html_table .= "<table class=\"pure-table pure-table-horizontal\">";
    $html_table .= "<thead><tr><th>序号</th><th>姓名</th><th>Email</th><th>年龄</th><th>手机</th><th>高校</th><th>是否组队</th><th>参赛口号</th></tr></thead><tbody>";
    foreach($datas as $item)
    {
      $html_table .= "<tr><td>{$item['id']}</td><td>{$item['name']}</td><td>{$item['gender']}</td><td>{$item['age']}</td><td>{$item['phone']}</td><td>{$item['school']}</td><td>{$item['team']}</td><td>{$item['motto']}</td></tr>";
    }
    $html_table .= "</tbody></table>";
  }
  elseif (array_key_exists('information_volunteer', $_GET)) 
  {
    $datas = $database->select("volunteer", "*");
    $register_num = count($datas);

    $html_table = "";
    $html_table .= "<table class=\"pure-table pure-table-horizontal\">";
    $html_table .= "<thead><tr><th>序号</th><th>姓名</th><th>性别</th><th>年龄</th><th>身高</th><th>邮箱</th><th>手机号</th><th>QQ</th><th>个人爱好</th><th>个人简历</th><th>服务经历</th></tr></thead><tbody>";
    foreach($datas as $item)
    {
      $html_table .= "<tr><td>{$item['id']}</td><td>{$item['c1']}</td><td>{$item['c2']}</td><td>{$item['c3']}</td><td>{$item['c4']}</td><td>{$item['c5']}</td><td>{$item['c6']}</td><td>{$item['c7']}</td><td>网页中略</td><td>网页中略</td><td>网页中略</td></tr>";
    }
    $html_table .= "</tbody></table>"; 
  }
  elseif (array_key_exists('information_spectator', $_GET)) 
  {
    $datas = $database->select("spectator", "*");
    $register_num = count($datas);

    $html_table = "";
    $html_table .= "<table class=\"pure-table pure-table-horizontal\">";
    $html_table .= "<thead><tr><th>序号</th><th>姓名</th><th>性别</th><th>学院</th><th>学好</th><th>邮箱</th><th>手机号</th><th>QQ</th><th>想看到什么</th><th>备注</th></tr></thead><tbody>";
    foreach($datas as $item)
    {
      $html_table .= "<tr><td>{$item['id']}</td><td>{$item['c1']}</td><td>{$item['c2']}</td><td>{$item['c3']}</td><td>{$item['c4']}</td><td>{$item['c5']}</td><td>{$item['c6']}</td><td>{$item['c7']}</td><td>网页中略</td><td>网页中略</td></tr>";
    }
    $html_table .= "</tbody></table>"; 
  }

}

function ProcessAfterRender()
{
  if (array_key_exists('output', $_GET))
  {
    outputExcel();
  }
}

function outputExcel()
{
  global $database;

  include_once ROOT."include/PHPExcel.class.php";
  include_once ROOT."include/PHPExcel/Writer/Excel2007.php";
  include_once ROOT."include/PHPExcel/IOFactory.php";

  $output_time = date("Y/m/d h:i:sa");
  $templateExcel = ROOT."cache/templateExcel.xlsx";
  $objPHPExcel = PHPExcel_IOFactory::load($templateExcel); 
  $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
  $filename = "output $output_time.xlsx";
  
  $datas = $database->select("register", "*");
  $datas_count = count($datas);
  $objActSheet = $objPHPExcel->getActiveSheet();  
  $objActSheet->setCellValue("A5", "总报名数:$datas_count 导出时间:$output_time");
  for ($i = 0; $i < $datas_count; $i++) {
    $key = $i + 7;
    $objActSheet->setCellValue("A$key", $datas[$i]['id']);
    $objActSheet->setCellValue("B$key", $datas[$i]['name']);
    $objActSheet->setCellValue("C$key", $datas[$i]['gender']);
    $objActSheet->setCellValue("D$key", $datas[$i]['age']);
    $objActSheet->setCellValue("E$key", $datas[$i]['phone']);
    $objActSheet->setCellValue("F$key", $datas[$i]['school']);
    $objActSheet->setCellValue("G$key", $datas[$i]['grade']);
    $objActSheet->setCellValue("H$key", $datas[$i]['team']);
    $objActSheet->setCellValue("I$key", $datas[$i]['motto']);
  }
  ob_clean();
  header("Pragma: public");
  header("Expires: 0");
  header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
  header("Content-Type:application/force-download");
  header("Content-Type:application/vnd.ms-execl");
  header("Content-Type:application/octet-stream");
  header("Content-Type:application/download");
  header('Content-Disposition:attachment;filename=' . $filename . '');
  header("Content-Transfer-Encoding:binary");
  $objWriter->save('php://output');    
}

?>