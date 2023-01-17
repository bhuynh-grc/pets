<?php
//ThisismyCONTROLLERforthepetsproject

//Turnonerrorreporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Requiretheautoloadfile
require_once('vendor/autoload.php');

//CreateaninstanceoftheBaseclass
$pet=Base::instance();
//Javaequivalent->Basef3=newBase();

//Defineadefaultroute("homepage"forpetsproject)
$pet->route('GET/',function(){
    $views=newTemplate();
    echo$views->render('views/home.html');
});

//RunFat-Free
$pet->run();
//Java->f3.run();
