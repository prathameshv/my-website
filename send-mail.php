<?php
/**
* Author: Prathamesh Verlekar
* Email: contact@prathv.com
* URL: http://www.prathv.com
**/

//vars
$subject = $_POST['subject'];
$to = explode(',', $_POST['to'] );

$from = $_POST['email'];

//data
$msg = "NAME: "  .$_POST['name']    ."<br>\n";
$msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";
$msg .= "PHONE: "  .$_POST['phone']    ."<br>\n";
$msg .= "MESSAGE: "  .$_POST['message']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send for each mail
foreach($to as $mail){
   mail($mail, $subject, $msg, $headers);
}
?>
