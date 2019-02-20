<?php 

namespace Importer\Lib;

class CsvFormat implements FormatInterface
{
    private $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function isValid()
    {}

    public function getContent()
    {
        if(file_exists($this->data)){
            $file = fopen($this->data,"r");
            $data = [];
            while(! feof($file))
            {
                $data[] = fgetcsv($file);
            }
            fclose($file);
            return $data;
        }
        return null;
    }

    public function ConvertToArray()
    {
        $content = $this->getContent();
        if(is_null($content)){
            throw new \Exception("The content of the given file is not valid.");
        }
        return $content;
    }
}