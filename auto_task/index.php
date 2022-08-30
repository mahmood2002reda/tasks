<?php

require 'function.php';


$contact=new contact();


$mail= new email('mahmood');
echo $mail->getEmail();
