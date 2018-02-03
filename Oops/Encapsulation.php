<?php

class TV
{
    private $model;
    private $volume;

    function getModel()
    {
        return $this->model;
    }
    function getVolume()
    {
        return $this->volume;
    }

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

}

$tv = new plazmaTV('BPL',2);

$tv->volumeUp();
echo $tv->getVolume();



?>