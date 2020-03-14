<?php
class Company
{
    var $name = 'Pradina Corp';

    function setCompanyName($name)
    {
        $this->name = $name;
    }
    function getCompanyName()
    {
        return $this->name;
    }
}
