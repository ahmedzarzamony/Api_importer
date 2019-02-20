<?php 

namespace Importer\Format;

class XmlFormat implements FormatInterface
{
    private $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function invalid($content)
    {
        libxml_use_internal_errors(true);

        $$xml = simplexml_load_string($content);
        $errors = libxml_get_errors();
        libxml_clear_errors();
        return !empty($errors);
    }

    public function getContent()
    {
        return @file_get_contents($this->data);
    }

    public function simplexml_to_array($xmlobj) {
        $a = array();
        foreach ($xmlobj->children() as $node) {
            if (is_array($node))
                $a[$node->getName()] = simplexml_to_array($node);
            else
                $a[$node->getName()] = (string) $node;
        }
        return $a;
    } 

    public function ConvertToArray()
    {
        $content = $this->getContent();
        if($this->invalid($content)){
            throw new \Exception("The content of the given file is not valid.");
        }
        $data = (array)simplexml_load_string($content, 'SimpleXMLElement', LIBXML_NOCDATA);
        $array  = json_decode( json_encode($data) , 1);
        return $array;
    }
}