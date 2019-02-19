<?php 

namespace Importer\Lib;

interface FormatInterface{

    /**
     * getType function
     ** check the given string if it [file] or [api url]
     * @param string $str
     * @return Str
     */
    public function getType(string $str);

    /**
     * getFormat function
     ** return the real format for given strucure
     * @return Str
     */
    public function getFormat();

    /**
     * ConvertToArray function
     ** convert given strucure from xml,json or other into array, we doing it for database insertion
     * @return Array
     */
    public function ConvertToArray();

}