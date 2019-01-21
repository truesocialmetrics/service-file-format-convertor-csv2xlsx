<?php

namespace Twee\Service\FileFormatConvertor;

use PHPUnit\Framework\TestCase;

class Csv2ElsxTest extends TestCase
{
    public function testConvert()
    {
        $content = file_get_contents(__DIR__ . '/_files/report.csv');
        $excel = (new Csv2Excel())->__invoke($content);
        $this->assertTrue(strpos($excel, '[Content_Types].xml') !== false);
        $this->assertTrue(strpos($excel, 'workbook.xml') !== false);
    }
}
