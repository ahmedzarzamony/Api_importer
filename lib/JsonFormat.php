<?php 

namespace Importer\Lib;

class JsonFormat implements FormatInterface
{
    private $data;
    
    public function __construct($data)
    {
        $this->data = $data;
        echo str_ireplace(__NAMESPACE__.'\\', '', __CLASS__) . ' Started <hr>';
    }

    public function isValid()
    {
        json_decode($this->data);
        return (int)(json_last_error() == JSON_ERROR_NONE);
    }

    public function getContent()
    {
        return @file_get_contents($this->data);
    }

    public function ConvertToArray()
    {
        $content = $this->getContent();
        if(is_null($content) || $this->isValid()){
            throw new \Exception("The content of the given file is not valid.");
        }
        echo $content;
        return json_decode($this->data, true);
    }
}