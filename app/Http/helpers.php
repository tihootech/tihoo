<?php


function commoTonewLine($string)
{
    return str_replace(',', "\r\n", $string);
}

function newLineToCommo($string)
{
    return str_replace("\r\n", ',', $string);
}

function prettyPhone($phone)
{
    return substr($phone,0,4) . ' ' . substr($phone,4,3) . ' ' . substr($phone,7,4);
}


function upload($new_file, $old_file=null)
{
    deleteFile($old_file);
    if ($new_file) {
        $relarive_path = "storage/app/public";
        $file_name = randomSHA(20) . '.' . $new_file->getClientOriginalExtension();
        $result = $new_file->move(base_path($relarive_path),$file_name);
        return 'storage/' . $file_name;
    }else {
        return null;
    }
}

function randomSHA($l=10)
{
	return substr(md5(rand()), 0, $l);
}

function deleteFile($income)
{
    $files = is_array($income) ? $income : [$income];
    foreach ($files as $file) {
        if ($file && file_exists($file)) {
            \File::delete($file);
        }
    }
}
