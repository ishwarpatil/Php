<?php

class db
{
    public static $table = 'Employee';

    public function Select()
    {
        echo 'select * from '. static::$table;
    }
    public function Insert()
    {
        echo 'insert into '. static::$table;
    }
}

class dept extends db
{
    public static $table = 'Department';
}

class users extends db
{
    public static $table = 'Users';
}

$db = new dept;
$db->Select();



?>