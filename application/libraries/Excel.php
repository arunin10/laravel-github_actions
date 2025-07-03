<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH."third_party/spreadsheet/vendor/autoload.php");
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

 class Excel extends CI_Controller {

   private $CI;

     public function __construct()
    {
        $this->CI =& get_instance();
    }


    public function excel_dld($table_columns, $result, $filename) {

        $spreadsheet = new Spreadsheet(); // instantiate Spreadsheet
    
   //$spreadsheet->setActiveSheetIndex(0);
   $column = 1;
    $styleArray = array(
     'borders' => array(
       'allborders' => array(
         'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
       )
     )
   );
   $alpha = 'A';

   $sheet = $spreadsheet->getActiveSheet();
    
   foreach($table_columns as $field)
   {
   //$sheet->setCellValueByColumnAndRow($column, 1, $field);
   $spreadsheet->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
    $column++;
    $alpha++;
   }

   $alpha_dec = chr(ord($alpha) - 1);

     $excel_row = 2;    
     foreach($result as $row) {
       $ii = 1;
       foreach($table_columns as $field){
         $sheet->setCellValueByColumnAndRow($ii, $excel_row, $row[$field]);
         $ii++;
         $column++;
       }
       $excel_row++;       
     }

    
     $sheet->setAutoFilter('A1:'.$alpha_dec.'1');
     for($col = 'A'; $col !== $alpha; $col++) {
       $sheet->getColumnDimension($col)->setAutoSize(true);
     }
     $sheet->getStyle('A1:'.$alpha_dec.'1')->getFont()->setBold(true);
     $row_count = $spreadsheet->setActiveSheetIndex(0)->calculateWorksheetDimension();
     $sheet->getStyle($row_count)->applyFromArray($styleArray); 
  

        //$writer = new Xlsx($spreadsheet); // instantiate Xlsx
 $date = date('Y-m-d h:i');
    $filename = $filename.' '.$date.".xlsx";
    
       header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename='.$filename.'');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, "Xlsx"); //Xls is also possible
$writer->save('php://output');
    }

    public function dld_form($result1){
      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();
      $date = date('Y-m-d h:i');
      $filename = 'report_'.$date.".xlsx";

       $verticalCenter = array(
        'alignment' => array(
          'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
          'vertical'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        ),
        'font' => array(
        'bold' => true
        )
      );

      $borderArray = array(
      'borders' => array(
        'allborders' => array(
          'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
        )
      )
      );

       $boldArray = array(
        'font' => array(
        'bold' => true
        )
      );

     for($col = 'A'; $col !== 'E'; $col++) {
      $sheet->getColumnDimension($col)->setAutoSize(true);
      }

      $sheet->getStyle('C2:C3')->applyFromArray($verticalCenter);
      $sheet->getStyle('D2:D3')->applyFromArray($verticalCenter);
      // $sheet->getStyle('I3:J3')->applyFromArray($verticalCenter);
      // $sheet->getStyle('I3:J3')->applyFromArray($verticalCenter);
      // $sheet->getStyle('K2:K3')->applyFromArray($verticalCenter);
      // $sheet->getStyle('L2:L3')->applyFromArray($verticalCenter);

      // $sheet->getStyle('D3:H3')->applyFromArray($verticalCenter);

      $sheet->setCellValue('A1','DESKTOP & AIO');
      $sheet->setCellValue('A2','Brand');
      $sheet->setCellValue('B2','Model');
      $sheet->setCellValue('C2','Price');
      $sheet->setCellValue('D2','Freebies');
      $sheet->mergeCells('C2:C3'); 
      $sheet->mergeCells('D2:D3'); 
      // $sheet->mergeCells('I3:J3'); 
      // $sheet->mergeCells('K2:K3'); 
      // $sheet->mergeCells('L2:L3'); 
      $sheet->getStyle("A2:D2")->getFont()->setBold(true);
      $sheet
        ->getStyle('A2:D2')
        ->getFill()
        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('429ef5');
      $sheet
        ->getStyle('A3:D3')
        ->getFill()
        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('429ef5');
      $spreadsheet->setActiveSheetIndex(0)->setTitle("Competitor Comparison (Desktop)");

      $excel_row = 4;
      foreach($result1['desktop'] as $row) {
        $sheet->setCellValueByColumnAndRow(1, $excel_row, $row['Brand']);
        $sheet->setCellValueByColumnAndRow(2, $excel_row, $row['Model']);
        $sheet->setCellValueByColumnAndRow(3, $excel_row, $row['Price']);
        $sheet->setCellValueByColumnAndRow(4, $excel_row, $row['Freebies']);
        $excel_row++;
      }


      //laptop
      $spreadsheet->createSheet();
      $spreadsheet->setActiveSheetIndex(1);
      $sheet1 = $spreadsheet->getActiveSheet();
      for($col = 'A'; $col !== 'E'; $col++) {
      $sheet1->getColumnDimension($col)->setAutoSize(true);
      }

      $sheet1->getStyle('C2:C3')->applyFromArray($verticalCenter);
      $sheet1->getStyle('D2:D3')->applyFromArray($verticalCenter);

      $sheet1->setCellValue('A1','LAPTOP');
      $sheet1->setCellValue('A2','Brand');
      $sheet1->setCellValue('B2','Model');
      $sheet1->setCellValue('C2','Price');
      $sheet1->setCellValue('D2','Freebies');
      $sheet1->mergeCells('C2:C3'); 
      $sheet1->mergeCells('D2:D3'); 
      $sheet1->getStyle("A2:D2")->getFont()->setBold(true);
      $sheet1
        ->getStyle('A2:D2')
        ->getFill()
        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('429ef5');
      $sheet1
        ->getStyle('A3:D3')
        ->getFill()
        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('429ef5');
      $spreadsheet->setActiveSheetIndex(1)->setTitle("Competitor Comparison (Laptop)");

      $excel_row = 4;
      foreach($result1['laptop'] as $row) {
        $sheet1->setCellValueByColumnAndRow(1, $excel_row, $row['Brand']);
        $sheet1->setCellValueByColumnAndRow(2, $excel_row, $row['Model']);
        $sheet1->setCellValueByColumnAndRow(3, $excel_row, $row['Price']);
        $sheet1->setCellValueByColumnAndRow(4, $excel_row, $row['Freebies']);
        $excel_row++;
      }

      //printer
      $spreadsheet->createSheet();
      $spreadsheet->setActiveSheetIndex(2);
      $sheet2 = $spreadsheet->getActiveSheet();
      for($col = 'A'; $col !== 'E'; $col++) {
      $sheet2->getColumnDimension($col)->setAutoSize(true);
      }

      $sheet2->getStyle('C2:C3')->applyFromArray($verticalCenter);
      $sheet2->getStyle('D2:D3')->applyFromArray($verticalCenter);

      $sheet2->setCellValue('A1','PRINTER');
      $sheet2->setCellValue('A2','Brand');
      $sheet2->setCellValue('B2','Model');
      $sheet2->setCellValue('C2','Price');
      $sheet2->setCellValue('D2','Freebies');
      $sheet2->mergeCells('C2:C3'); 
      $sheet2->mergeCells('D2:D3'); 
      $sheet2->getStyle("A2:D2")->getFont()->setBold(true);
      $sheet2
        ->getStyle('A2:D2')
        ->getFill()
        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('429ef5');
      $sheet2
        ->getStyle('A3:D3')
        ->getFill()
        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('429ef5');
      $spreadsheet->setActiveSheetIndex(2)->setTitle("Competitor Comparison (Printer)");

      $excel_row = 4;
      foreach($result1['printer'] as $row) {
        $sheet2->setCellValueByColumnAndRow(1, $excel_row, $row['Brand']);
        $sheet2->setCellValueByColumnAndRow(2, $excel_row, $row['Model']);
        $sheet2->setCellValueByColumnAndRow(3, $excel_row, $row['Price']);
        $sheet2->setCellValueByColumnAndRow(4, $excel_row, $row['Freebies']);
        $excel_row++;
      }

      $row_count = $spreadsheet->setActiveSheetIndex(0)->calculateWorksheetDimension();
      $row_count = str_replace("A1", "A2", $row_count);

      $row_count1 = $spreadsheet->setActiveSheetIndex(1)->calculateWorksheetDimension();
      $row_count1 = str_replace("A1", "A2", $row_count1);

      $row_count2 = $spreadsheet->setActiveSheetIndex(2)->calculateWorksheetDimension();
      $row_count2 = str_replace("A1", "A2", $row_count2);

     $styleArray = [  'borders' => [
        'inside' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => 'FF000000'],
        ],
        'outline' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => 'FF000000'],
        ],
    ],];

    $spreadsheet->setActiveSheetIndex(0)->getStyle('A1')->getFont()->setSize(15);
    $spreadsheet->setActiveSheetIndex(1)->getStyle('A1')->getFont()->setSize(15);
    $spreadsheet->setActiveSheetIndex(2)->getStyle('A1')->getFont()->setSize(15);
    $spreadsheet->setActiveSheetIndex(0)->getStyle($row_count)->applyFromArray($styleArray); 
    $spreadsheet->setActiveSheetIndex(1)->getStyle($row_count1)->applyFromArray($styleArray); 
    $spreadsheet->setActiveSheetIndex(2)->getStyle($row_count2)->applyFromArray($styleArray); 

      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename='.$filename.'');
      header('Cache-Control: max-age=0');

      $writer = IOFactory::createWriter($spreadsheet, "Xlsx"); //Xls is also possible
      $writer->save('php://output');

    }
 }
