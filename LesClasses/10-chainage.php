<?php 


class MaClass {
    public $test = "ABC";

    public function method1(string $data)
    {
        $this->test .= " ".$data;
        return $this;
    }

    public function method2(string $data)
    {
        $this->test .= " ".$data;
        return $this;
    }
}

$monObjet = new MaClass;

// $monObjet->method1()->method2();


echo $monObjet->test;
echo "<br><br>";


$monObjet->method1("DEF")->method2("GHI");

echo $monObjet->test;
echo "<br><br>";
