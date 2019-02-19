<?php 

namespace Importer\Lib;

interface FormatInterface{

    public function isValid();
    public function getContent();
    public function ConvertToArray();

}