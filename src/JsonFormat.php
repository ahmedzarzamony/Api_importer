<?php 

namespace Importer\Format;

class JsonFormat implements FormatInterface
{
    private $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function invalid($content)
    {
        if(is_null($content))
            return false;

        json_decode($content);
        return (int)(json_last_error() != JSON_ERROR_NONE);
    }

    public function getContent()
    {
        return @file_get_contents($this->data);
    }

    public function ConvertToArray()
    {
        $content = $this->getContent();
        if($this->invalid($content)){
            return "The content of the given file is not valid.";
        }
        return json_decode($content, true);
    }
}