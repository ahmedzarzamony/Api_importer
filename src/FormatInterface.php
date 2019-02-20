<?php 

namespace Importer\Format;

interface FormatInterface{

    public function invalid($content);
    public function getContent();
    public function ConvertToArray();

}