
<?php

//zad1

echo "<h3>ZADANIE 1</h3>";

$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

echo "Piaty element: " . $tab1[4] . "<br>";

$tab1[6] = 12;

$tab2 = array();

for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i];
}

$tab3 = array();

for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

echo "Tab1: ";
foreach ($tab1 as $x) {
    echo $x . " ";
}

echo "<br>Tab2: ";
foreach ($tab2 as $x) {
    echo $x . " ";
}

echo "<br>Tab3: ";
foreach ($tab3 as $x) {
    echo $x . " ";
}

for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[count($tab1) - 1 - $i];
}

echo "<br>Tab2 odwrotnie: ";
foreach ($tab2 as $x) {
    echo $x . " ";
}

echo "<br>";


//zad2

echo "<h3>ZADANIE 2</h3>";

$tab = array(7, 3, 12, 6, 9, 5, 4, 10, 2, 15);

echo "Tablica poczatkowa: ";
foreach ($tab as $x) {
    echo $x . " ";
}

$n = count($tab);
$min = $tab[0];
$max = $tab[0];
$suma = 0;
$ile3 = 0;
$parzyste = 0;
$nieparzyste = 0;
$podzielne3 = 0;

foreach ($tab as $x) {
    if ($x < $min) {
        $min = $x;
    }

    if ($x > $max) {
        $max = $x;
    }

    $suma += $x;

    if ($x == 3) {
        $ile3++;
    }

    if ($x % 2 == 0) {
        $parzyste++;
    } else {
        $nieparzyste++;
    }

    if ($x % 3 == 0) {
        $podzielne3++;
    }
}

echo "<br>Najmniejszy element: " . $min;
echo "<br>Najwiekszy element: " . $max;
echo "<br>Srednia: " . ($suma / $n);
echo "<br>Liczba wystapien liczby 3: " . $ile3;

sort($tab);

echo "<br>Sortowanie rosnaco: ";
foreach ($tab as $x) {
    echo $x . " ";
}

if ($n % 2 == 1) {
    $mediana = $tab[(int)($n / 2)];
} else {
    $mediana = ($tab[$n / 2 - 1] + $tab[$n / 2]) / 2;
}

echo "<br>Mediana: " . $mediana;

echo "<br>Trzy najmniejsze: ";
for ($i = 0; $i < 3 && $i < $n; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>Trzy najwieksze: ";
for ($i = $n - 3; $i < $n; $i++) {
    if ($i >= 0) {
        echo $tab[$i] . " ";
    }
}

for ($i = 0; $i < $n; $i++) {
    $tab[$i] = $tab[$i] * $tab[$i];
}

echo "<br>Elementy podniesione do kwadratu: ";
foreach ($tab as $x) {
    echo $x . " ";
}

echo "<br>Liczby parzyste: " . $parzyste;
echo "<br>Liczby nieparzyste: " . $nieparzyste;
echo "<br>Liczby podzielne przez 3: " . $podzielne3;

echo "<br>";


//zad3

echo "<h3>ZADANIE 3</h3>";

$wyraz = "Programista";
$litery = array();

for ($i = 0; $i < 10; $i++) {
    $litery[$i] = $wyraz[$i];
}

echo "Wyraz poczatkowy: ";
foreach ($litery as $x) {
    echo $x;
}

for ($i = 0; $i < 10; $i++) {
    if ($litery[$i] >= 'a' && $litery[$i] <= 'z') {
        $litery[$i] = strtoupper($litery[$i]);
    } else {
        $litery[$i] = strtolower($litery[$i]);
    }
}

echo "<br>Zamiana wielkosci liter: ";
foreach ($litery as $x) {
    echo $x;
}

shuffle($litery);

echo "<br>Losowa kolejnosc: ";
foreach ($litery as $x) {
    echo $x;
}

echo "<br>";


//zad4

echo "<h3>ZADANIE 4</h3>";

$A = array();

for ($i = 0; $i < 100; $i++) {
    $A[$i] = rand(1, 20);
}

echo "Tablica 100 liczb:<br>";
foreach ($A as $x) {
    echo $x . " ";
}

$max = $A[0];
$ileMax = 0;

foreach ($A as $x) {
    if ($x > $max) {
        $max = $x;
    }
}

foreach ($A as $x) {
    if ($x == $max) {
        $ileMax++;
    }
}

echo "<br><br>Najwieksza liczba: " . $max;
echo "<br>Liczba jej wystapien: " . $ileMax;

echo "<br>Liczby nieparzyste: ";
foreach ($A as $x) {
    if ($x % 2 != 0) {
        echo $x . " ";
    }
}

echo "<br>Liczby z nieparzystych indeksow: ";
for ($i = 1; $i < 100; $i += 2) {
    echo $A[$i] . " ";
}

$ile = 0;

echo "<br>Liczby z przedzialu [5, 15): ";
foreach ($A as $x) {
    if ($x >= 5 && $x < 15) {
        echo $x . " ";
        $ile++;
    }
}

echo "<br>Liczba elementow w przedziale: " . $ile;

$a = 11;
$najblizszy = $A[0];

foreach ($A as $x) {
    if (abs($x - $a) < abs($najblizszy - $a)) {
        $najblizszy = $x;
    }
}

echo "<br>Liczba a: " . $a;
echo "<br>Element najblizszy a: " . $najblizszy;

$min = $A[0];
$indeksMin = 0;

for ($i = 1; $i < 100; $i++) {
    if ($A[$i] < $min) {
        $min = $A[$i];
        $indeksMin = $i;
    }
}

echo "<br>Minimum: " . $min;

if ($indeksMin > 0) {
    echo "<br>Poprzednik minimum: " . $A[$indeksMin - 1];
} else {
    echo "<br>Minimum jest na poczatku tablicy.";
}

if ($indeksMin < 99) {
    echo "<br>Nastepnik minimum: " . $A[$indeksMin + 1];
} else {
    echo "<br>Minimum jest na koncu tablicy.";
}

$B = array();

foreach ($A as $x) {
    if ($x > 10) {
        $B[] = $x;
    }
}

echo "<br>Elementy wieksze od 10: ";
foreach ($B as $x) {
    echo $x . " ";
}

echo "<br>Rozmiar tablicy B: " . count($B);

$C = array();
$suma = 0;

for ($i = 0; $i < 100; $i++) {
    $suma += $A[$i];
    $C[$i] = $suma;
}

echo "<br>Sumy czesciowe: ";
foreach ($C as $x) {
    echo $x . " ";
}

rsort($A);

echo "<br>Sortowanie malejaco: ";
foreach ($A as $x) {
    echo $x . " ";
}

$liczniki = array_count_values($A);

echo "<br>Liczby wystepujace przynajmniej 3 razy: ";
foreach ($liczniki as $wartosc => $ileRazy) {
    if ($ileRazy >= 3) {
        echo $wartosc . " (" . $ileRazy . " razy) ";
    }
}

echo "<br>";


//zad5

echo "<h3>ZADANIE 5</h3>";

$fib = array();
$fib[0] = 0;
$fib[1] = 1;

for ($i = 2; $i < 100; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

echo "Ciag Fibonacciego:<br>";
foreach ($fib as $x) {
    echo $x . " ";
}

$potegi = array();

for ($i = 0; $i < 100; $i++) {
    $potegi[$i] = pow(2, $i);
}

echo "<br><br>Potegi liczby 2:<br>";
foreach ($potegi as $x) {
    echo $x . " ";
}

$trojki = array();

for ($i = 0; $i < 100; $i++) {
    $trojki[$i] = 3 * ($i + 1);
}

echo "<br><br>Wielokrotnosci liczby 3:<br>";
foreach ($trojki as $x) {
    echo $x . " ";
}

$dwojki = array();
$dwojki[0] = 2;

for ($i = 1; $i < 100; $i++) {
    $dwojki[$i] = $dwojki[$i - 1] * 2;
}

echo "<br><br>Ciag 2, 4, 8, 16, 32...<br>";
foreach ($dwojki as $x) {
    echo $x . " ";
}

?>
