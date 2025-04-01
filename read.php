<?php

require __DIR__.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$file = 'example1.xlsx';

if (! file_exists($file)) {
    echo "檔案不存在\n";
    exit;
}

$spreadsheet = IOFactory::load($file); // 載入 Excel 檔案
$sheet = $spreadsheet->getActiveSheet(); // 取得當前工作表

echo $sheet->getCell('A1')->getValue(); // 讀取 A1 儲存格的值

foreach ($sheet->getRowIterator() as $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);

    foreach ($cellIterator as $cell) 
        echo $cell->getValue() . "\t";

    echo "\n";
}