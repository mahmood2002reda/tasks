<?php
require_once 'autoload.php';

load_class('contact');
load_class('person');

$contact= new Contact('mahmood33reda33@gmail.com');
echo$contact ->getEmail();
$person= new Person();
