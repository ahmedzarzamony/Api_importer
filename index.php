<?php 

namespace Importer\Lib;


require __DIR__.'/vendor/autoload.php';
try{
    
    echo '<h3>CSV Started </h3><hr>';
    $x = new Importer('demo/test.csv', 'csv');
    print_r($x->get());
    
    echo '<h3>Json Started </h3><hr>';
    $y = new Importer('demo/test.json', 'json');
    print_r($y->get());


}catch(\Error $e){
    echo '<h4>'. $e->getMessage(). '</h4>';
}catch(\Exception $e){
    echo '<h4>'. $e->getMessage(). '</h4>';
}