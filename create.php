<?php

require __DIR__.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', '商品名稱');
$sheet->setCellValue('B1', '價格');
$sheet->setCellValue('A2', '筆記型電腦');
$sheet->setCellValue('B2', 25000);

$writer = new Xlsx($spreadsheet);
$writer->save('example.xlsx'); // 儲存檔案