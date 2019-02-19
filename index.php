<?php 

namespace Importer\Lib;


require __DIR__.'/vendor/autoload.php';
try{
    
$x = new Importer('demo/test.csv', 'csv');
print_r($x->get());


}catch(\Error $e){
    echo '<h1>'. $e->getMessage(). '</h1>';
}catch(\Exception $e){
    echo '<h1>'. $e->getMessage(). '</h1>';
}