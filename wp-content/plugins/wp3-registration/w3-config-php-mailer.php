<?php


function my_phpmailer_smtp( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = SMTP_server;  
    $phpmailer->SMTPAuth = SMTP_AUTH;
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->Username = SMTP_username;
    $phpmailer->Password = SMTP_password;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From = SMTP_FROM;
    $phpmailer->FromName = SMTP_NAME;
}
add_action( 'phpmailer_init', 'my_phpmailer_smtp' );
?>