<?php

$name = $_POST['name'];
echo $name;

Switch($_POST['color']){
    case 'red':
    $change = "rgb(225,50,20)";
    break;

    case 'green':
    $change = "rgb(50,225,20)";
    break;

    case 'blue':
    $change = "rgb(50,20,225)";
    break;

    default:
    $change = "rgb(225,225,225)";
}
?>

<html>
    <body style="background:<?php echo $change;?>"
        
    </body>
    </html>