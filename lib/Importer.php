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
        $this->getDriver($type);
    }

    public function checkExists($type)
    {
        if(!in_array($type, $this->driver_list)){
            throw new \Exception("Not Supported");
        }
    }
    public function getDriver($type)
    {
        switch($type){
            case 'csv':
                $this->driver = new CsvFormat($this->data);
                break;
            case 'xml':
                $this->driver = new XmlType();
                break;
            default:
                $this->driver = new JsonType();
        }
    }
    public function ConvertToArray()
    {
        
    }
}