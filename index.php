<?php 



require __DIR__.'/vendor/autoload.php';


use Importer\Format\Importer;


try{
    
    echo '<h3>CSV Started </h3><hr>';
    $x = new Importer('demo/test.csv', 'csv');
    echo '<pre>', print_r($x->get(), 1), '</pre>';
    
    echo '<h3>Json Started </h3><hr>';
    $y = new Importer('demo/test.json', 'json');
    echo '<pre>', print_r($y->get(), 1), '</pre>';
    
    echo '<h3>XML Started </h3><hr>';
    $z = new Importer('demo/test.xml', 'xml');
    echo '<pre>', print_r($z->get(), 1), '</pre>';


}catch(\Error $e){
    echo '<h4>'.$e->getMessage(). '</h4>';
}catch(\Exception $e){
    echo '<h4>'. $e->getMessage(). '</h4>';
}