<?php 

namespace Importer\Lib;
use Importer\Lib\CsvFormat;
class Importer 
{
    private $data;
    private $type;
    private $driver_list = ['csv', 'xml', 'json'];
    private $driver;
    
    public function __construct($data, $type)
    {
        $this->checkExists($type);
        $this->data = $data;
        $this->type = $type;
    }

    public function get()
    {
        $data = $this->getDriver($this->type);
        echo $data;
        return $data->ConvertToArray();
    }

    public function checkExists($type)
    {
        if(!in_array($type, $this->driver_list)){
            throw new \Exception("Not Supported");
        }
    }
    public function getDriver($type)
    {
        $array = [];
        switch($type){
            case 'csv':
                $array = new CsvFormat($this->data);
                break;
            case 'xml':
                $array = new XmlFormat($this->data);
                break;
            default:
                $array = new JsonFormat($this->data);
        }
        return $array;
    }
}