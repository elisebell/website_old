<?php
// the $_POST[] array will contain the passed in filename and data
// the directory "data" is writable by the server (chmod 777)
$filename = "data/".$_POST['filename'];

$i = 1;
while(file_exists('tmp/'.$filename.”.csv))
{           
    $filename = (string)$filename.$i;
    $name = $actual_name.”.csv”;
    $i++;
}

$data = $_POST['filedata'];
// write the file to disk
file_put_contents($filename, $data);
?>


