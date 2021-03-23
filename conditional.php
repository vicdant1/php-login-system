<?php
$empty = 0;
$user = 0;
$created = 0;

if(@$_SESSION['empty']):
  $empty = 1;
elseif(@$_SESSION['userExistente']):
  $user = 1;
endif;
?>