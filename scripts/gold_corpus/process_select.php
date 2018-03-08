<?php
// From  http://php.net/manual/en/function.fgetcsv.php#35915
function arrayFromCSV($file, $hasFieldNames = false, $delimiter = ',', $enclosure='') {
    $result = Array();
    $size = filesize($file) +1;
    $file = fopen($file, 'r');
    if ($hasFieldNames) $keys = fgetcsv($file, $size, $delimiter, $enclosure);
    while ($row = fgetcsv($file, $size, $delimiter, $enclosure)) {
        $n = count($row); $res=array();
        for($i = 0; $i < $n; $i++) {
            $idx = ($hasFieldNames) ? $keys[$i] : $i;
            $res[$idx] = $row[$i];
        }
        $result[] = $res;
    }
    fclose($file);
    return $result;
  }

$data = arrayFromCSV('select_from.csv', true, ',','"');


// calculate the largest surface possible of an object and add a surface column


// count # and [ and combined value, add 2 columns to that effect


// count how many texts per city and for each city how many kings, calculate %

// count columns, line length and line count, create quick stats

?>
