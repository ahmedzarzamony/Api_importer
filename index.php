<?php 

require __DIR__.'/vendor/autoload.php';

use Importer\Lib\FormatInterface;

$x = new FormatInterface();
echo $x->show();