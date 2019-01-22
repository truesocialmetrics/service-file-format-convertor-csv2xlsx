# service-file-format-convertor-csv2xlsx
convert files from csv to excel

[![wercker status](https://app.wercker.com/status/7b970e4886c2ff3db83a8915874ee236/s/master "wercker status")](https://app.wercker.com/project/byKey/7b970e4886c2ff3db83a8915874ee236)

Usage sample:
```
use Twee\Service\FileFormatConvertor\Csv2Excel;

$content = file_get_contents('report.csv');
$excel = (new Csv2Excel())->__invoke($content);
```
