<?php
$dbhost = 'localhost';
$dbname = 'db_name';
$dbuser = 'db_user';
$dbpass = 'db_password';
try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
    echo "Connection error :" . $exception->getMessage();
}
define("BASE_URL", "http://udemyrealestate.com/");
define("ADMIN_URL", BASE_URL."admin/"); 

define("SMTP_HOST", "sandbox.smtp.mailtrap.io");
define("SMTP_PORT", "your_port");
define("SMTP_USERNAME", "username");
define("SMTP_PASSWORD", "password");

