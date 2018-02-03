<?php

class TV
{
    public $model;
    public $volume;

    function volumeUp()
    {
        $this->volume++;
    }

    function volumeDown()
    {
        $this->volume--;
    }

    function __construct($m,$v)
    {
        $this->model=$m;
        $this->volume=$v;
    }


}

class plazmaTV extends TV
{
    public $timer = true;

    //public $model = 'abc';
    //function overraidding

    /*function __construct()
        {

        }
    */

}

$tv_one = new plazmaTV('BPL',3);
$tv_tow = new plazmaTV('Samsung',5);

?>