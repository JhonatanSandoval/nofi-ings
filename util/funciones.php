<?php

function filesFromFolderToArray($folder)
{
    $arr = array();

    if ($handle = opendir($folder)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $ext = substr($entry, -5);
                if (strpos($ext, '.') !== false) {
                    array_push($arr, $entry);
                }
            }
        }
        closedir($handle);
    }
    return $arr;

}