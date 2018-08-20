<?php

header('content-type: text/plain; charset=UTF-8');

if (isset($_POST['userid']) && isset($_POST['pass'])){

  $id = $_POST['userid'];
  $pw = $_POST['pass'];

  $str0 = "AJAX REQUEST SUCCES\nuserid:" . $id . "\npass:" . $pw . "\n";

  $result = nl2br($str0);

  echo $result;

} else {
  echo "FAIL TO AJAX REQUEST";
}

?>