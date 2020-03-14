<?php
class Employee
{
    var $name = 'Pradina Corp';
    var $title = 'Title';
    var $salary = 1;

    function setEmployeeName($name)
    {
        $this->name = $name;
    }
    function getEmployeeTitle()
    {
        return $this->title;
    }
    function getEmployeeProfile()
    {
        $profile = array('name' => $this->name , 'title' => $this->title, 'salary' => $this->salary );
        return $profile;
    }
    function getEmployeeMonthlySalary($day)
    {
        $monthly = 30;
        $totalSalary = $this->salary / 30 * $day;
        return $totalSalary;
    }
}
