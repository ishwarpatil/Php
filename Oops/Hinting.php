<?php

/* array hinting
function a(array $arr)
{
    echo '<table>';
    foreach($arr as $x=>$value)
    {
        echo "<tr><td>$x</td><td>$value</td></tr>";
    }
    echo '</table>';
}

$arr = ['Ishwar'=>25,'Sagar'=>26];

a($arr);*/


/* class hinting
class abc
{
    function abc()
    {
        echo 'I am abc class';
    }
}

class xyz
{
    function xyz()
    {
        echo 'I am xyz class';
    }
}

function callFunction(abc $abc)
{
    $abc->abc();
}

$abc = new xyz;

callFunction($abc);
*/


/* interface hinting
interface text
{
    function abc();
}
class abc implements text
{
    function abc()
    {
        echo 'I am abc class interface';
    }
}

class xyz implements text
{
    function abc()
    {
            echo 'I am xyz class interface';
    }

    function xyz()
    {
        echo 'I am xyz class';
    }
}

function callFunction(text $abc)
{
    $abc->abc();
}

$abc = new abc;

callFunction($abc);
*/

?>