<?php

namespace Rap2hpoutre\Csv;


function csv_to_associative_array($file, $delimiter = ',', $enclosure = '"') 
{
    if (($handle = fopen($file, "r")) !== false) {
        $headers = fgetcsv($handle, 0, $delimiter, $enclosure);
        $lines = [];
        while (($data = fgetcsv($handle, 0, $delimiter, $enclosure)) !== false) {
            $current = [];
            $i = 0;
            foreach ($headers as $header) {
                $current[$header] = $data[$i++];
            }
            $lines[] = $current;
        }
        fclose($handle);
        return $lines;
    }
}
