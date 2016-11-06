<?php

function csv_to_array($filename='', $delimiter=',')
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = array_slice($row, 1);
            else
                $data[$row[0]] = array_combine($header, array_slice($row,1));
        }
        fclose($handle);
    }
    return $data;
}

function get_availability($csvarray) {

    $data = array();
    foreach($csvarray as $row => $civs) {
        $avail = array();
        $noavail = array();

        foreach($civs as $civ => $available) {
            if($available > 0) {
                $avail[] = $civ;
            } else {
                $noavail[] = $civ;
            }
        }
        $data[$row] = array("avail" => $avail, "noavail" => $noavail);
    }

    return $data;
}

function csv_to_availability($filename='', $delimiter=',') {
    return get_availability(csv_to_array($filename, $delimiter));
}
