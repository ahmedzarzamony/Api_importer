<?php 

namespace Importer\Lib;

interface FormatInterface{

    public function isFormat();
    public function getContent();
    public function ConvertToArray();

}