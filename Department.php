<?php
class Department
{
    var $name = 'Pradina Corp';

    function setDepartmentName($name)
    {
        $this->name = $name;
    }
    function getCompanyName()
    {
        return $this->name;
    }
}
