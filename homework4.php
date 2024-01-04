<pre style="font-family: Akrobat;font-size: 25px">
<?php

class hesaplama
{
    public $kenar1;
    public $kenar2;
    public $kenar3;
    public $yukseklik;
}

class dikdortgen extends hesaplama
{
    public function AlanD($kenar1, $kenar2)
    {
        return $kenar1 * $kenar2;
    }

    public function CevreD($kenar1, $kenar2)
    {
        return ((2 * $kenar1) + (2 * $kenar2));
    }

}

class ucgen extends hesaplama
{
    public function AlanU($kenar3, $yukseklik)
    {
        return (($kenar3 * $yukseklik) / 2);
    }

    public function CevreU($kenar1, $kenar2, $kenar3)
    {
        return $kenar1 + $kenar2 + $kenar3;
    }
}

class kare extends hesaplama
{
    public function AlanK($kenar1)
    {
        return $kenar1 * $kenar1;
    }

    public function CevreK($kenar1)
    {
        return $kenar1 * 4;
    }
}

$sonucD = new dikdortgen();
echo 'Dikdörtgenin Alanı: ' . $sonucD->AlanD('5', 10) . "<br>";
echo 'Dikdörtgenin Çevresi: ' . $sonucD->CevreD('5', 10) . "<br>";
echo "<br>";
$sonucU = new ucgen();
echo 'Üçgenin Alanı: ' . $sonucU->AlanU('5', '10') . "<br>";
echo 'Üçgenin Çevresi: ' . $sonucU->CevreU('10', '10', '10') . "<br>";
echo "<br>";
$sonucK = new kare();
echo 'Karenin Alanı: '. $sonucK->AlanK('5')."<br>";
echo 'Karenin Çevresi: '. $sonucK->CevreK('10')."<br>";
?>
    </pre>
