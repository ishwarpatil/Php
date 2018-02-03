<?php

/*
trait a
{
    private function text()
    {
        echo "I am trait";
    }
}

class b
{
    use a
    {
        a::text as public text1;
    }

}

$a = new b();
$a->text1();
*/

trait one
{
    public function text()
    {
        echo "I am trait one";
    }
}

trait two
{
    public function text()
    {
        echo "I am trait two";
    }
}

class b
{
    use one,two
    {
        two::text insteadof one;
        one::text as text1;
    }

}

$a = new b();
$a->text1();

?>