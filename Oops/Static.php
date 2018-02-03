<?php

class emp
{
    public static $counter = 0;

    /*public static function getCounter()
    {
        return self::$counter;
    }*/

    public function __construct()
    {
        self::$counter++;
    }

}

class emp1 extends emp
{
    public static function getCounter()
    {
            parent::getCounter();
    }
}

$a = new emp();
$b = new emp();
$c = new emp();

//echo emp1::getCounter();
echo emp::$counter;



?>