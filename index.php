<?php 

namespace Importer\Lib;


require __DIR__.'/vendor/autoload.php';
try{
    
$x = new Importer('gvfdc', 'csv');
    


}catch(\Error $e){
    echo '<h1>'. $e->getMessage(). '</h1>';
}catch(\Exception $e){
    echo '<h1>'. $e->getMessage(). '</h1>';
}