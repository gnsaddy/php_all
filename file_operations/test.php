<?php
$ch = $_POST['option'];
$data = $_POST['data'];

switch($ch){
    case 1:
        $file = "test.txt";
        $f = fopen($file,'w') or die("can not open the file ");
        echo "File created ";
        break;

    case 2:
        $file = "test.txt";
        $f = fopen($file,'w') or die("can not open the file ");
        fwrite($f,$data);
        echo "Succeful operation";
        break;

    case 3:
        $file = "test.txt";
        $f = fopen($file,'r') or die("can not open file");
        echo fread($f, filesize($file));
        break;

    case 4:
        $file = "test.txt";
        $f = fopen($file,'r') or die("can not open the file ");
        fclose($f);
        echo "FIle closed ";
        break;
    
    case 5:
        $file = "test.txt";
        $f = fopen($file,'a') or die("can not open the file ");
        fwrite($f,$data);
        echo "Appended data";
        break;

}
?>