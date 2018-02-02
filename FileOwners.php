<?php

class FileOwners
{
    public static function groupByOwners($files)
    {
        $newFiles = [];

        foreach ($files as $key => $item) {
            $newFiles[$item][] = $key;
        }

        return $newFiles;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));