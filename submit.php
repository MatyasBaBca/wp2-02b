<?php 
//$name = $_POST['jmeno'];
//$age = $_POST['vek'];
//$gender = $_POST['pohlavi'];
$name = filter_input(INPUT_POST, 'jmeno');
$age = filter_input(INPUT_POST, 'vek');
$gender = filter_input(INPUT_POST, 'pohlavi');


    if(empty($name)) {

    $name= "Nevyplněno";

    }

    if(empty($age)) {

        $age= "Nevyplněno";
    
        }
    if(empty($gender)){

        $gender= "Nevyplněno";
    
        } 



    if ($age >= 18) {

       if ($gender == "male") 
       {
        echo "$name Zaplat stovku pro vstup";


       }else {
        echo "$name Mas vstup zadarmo.";


       }


    }else {
        echo "vypadni, neni ti nad 18let.";


    }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 </body>
 </html>