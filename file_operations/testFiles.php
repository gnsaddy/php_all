
<?php 
// Opening a file 
$myfile = fopen("test.txt", "r"); 
// $newfile = fopen("newtext.txt","w");
  
// reading 13 bytes from the file 
// using fread() function 
$size = filesize("test.txt");
echo fread($myfile, $size); 

copy('test.txt','newtext.txt');
// echo newtext.txt;

if(!unlink('newtext.txt')){
    echo "could not delete file";
}
else {
    echo "file 'newtext.txt' deleted";
}
  
// closing the file 
fclose($myfile); 
?> 


