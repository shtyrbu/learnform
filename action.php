<?php


//print_r($_REQUEST);

$bbb = $_REQUEST['bbb'];

if($bbb > 10) {
    header('Location: /success.php ');
} else {
    header('Location: /error.php ');
}
exit;
