<?php 

namespace Importer\Lib;

class CsvFormat implements FormatInterface
{
    private $data;
    
    public function __construct($data)
    {
        $this->data = $data;
        echo str_ireplace(__NAMESPACE__.'\\', '', __CLASS__) . ' Started <hr>';
    }

    public function isFormat()
    {
        
    }

    public function getContent()
    {
        
    }
    public function ConvertToArray()
    {
        
    }
}