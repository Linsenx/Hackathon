<?php
require_once "./include/system.func.php";
require_once ROOT."include/PHPExcel.class.php";
require_once ROOT."include/PHPExcel/Writer/Excel2007.php";
require_once ROOT."include/PHPExcel/IOFactory.php";

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

  $objActSheet->getStyle("H$key")->getAlignment()->setWrapText(true);
  $objActSheet->getStyle("I$key")->getAlignment()->setWrapText(true);
  $objActSheet->getStyle("H$key")->getAlignment()->setShrinkToFit(true);
  $objActSheet->getStyle("I$key")->getAlignment()->setShrinkToFit(true);

  $objActSheet->getColumnDimension("C")->setWidth(20);
  $objActSheet->getColumnDimension("E")->setWidth(20);
  $objActSheet->getColumnDimension("I")->setWidth(40);

  $objActSheet->getStyle("A$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $objActSheet->getStyle("B$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $objActSheet->getStyle("C$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $objActSheet->getStyle("D$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $objActSheet->getStyle("E$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $objActSheet->getStyle("F$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $objActSheet->getStyle("G$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $objActSheet->getStyle("H$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);  
  $objActSheet->getStyle("I$key")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

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
ob_flush();
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