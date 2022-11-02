<?php
function mail_message_register($acc,$pass){
   return '
   <h1>Thank you for your register</h1>
   <h2>This is your account:'.$acc.'</h2>
   <h2>This is your password:'.$pass.'</h2>
   ';
}


?>