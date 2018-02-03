<?php

abstract class baseEmployee
{
    protected $fname;
    protected $lname;

    public abstract function getMonthlySalary();

    public function getFullName()
    {
        return $this->fname." ".$this->lname;
    }
    public function __construct($f,$l)
    {
        $this->fname=$f;
        $this->lname=$l;
    }
}

class fullTimeEmployee extends baseEmployee
{
    protected $salary = 120000;

    public function getMonthlSalary()
    {
        return $this->salary / 12;
    }
}

class contractEmployee extends baseEmployee
{
    protected $hrate = 50;
    protected $thours = 10;

    public function getMonthlySalary()
    {
        return $this->hrate * $this->thours;
    }
}

//$full = new baseEmployee('Ishwar','Patil'); not create base class object B/z base class is abstract class so.

$fulltime = new fullTimeEmployee('Ishwar','Patil');
$contract = new contractEmployee('sagar','patel');

echo $fulltime->getFullName();
echo '<br>';
echo $fulltime->getMonthlySalary();
echo '<br>';
echo $contract->getFullName();
echo '<br>';
echo $contract->getMonthlySalary();












?>