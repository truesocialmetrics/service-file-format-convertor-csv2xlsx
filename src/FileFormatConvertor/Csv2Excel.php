<?php

namespace Twee\Service\FileFormatConvertor;

use PhpOffice\PhpSpreadsheet\Reader\Csv as ReaderCsv;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as WriterXlsx;

class Csv2Excel
{
    public function __invoke(string $data)
    {
        $tempnam = tempnam(sys_get_temp_dir(), 'converting-file-format');
        $input = $tempnam . '.csv';
        $output = $tempnam . '.xlsx';
        file_put_contents($tempnam, 'abc');
        file_put_contents($input, $data);

        $reader = new ReaderCsv();
        $spreadsheet = $reader->load($input);
        $writer = new WriterXlsx($spreadsheet);
        $writer->save($output);

        $content = file_get_contents($output);
        @unlink($tempnam);
        @unlink($input);
        @unlink($output);

        return $content;
    }
}
