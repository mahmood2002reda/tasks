<?php
require 'app/bootstrap.php';
$user= new User('admin', 'cccc');
 echo $user->getUsername();