<?php
$residue = 7 % 3;
echo 'Залишок від ділення 7 на 3 = ' . $residue . '<br>';

$intPart =  intval(7 / 7.15);
echo 'Ціла частина ділення 7 и 7,15 = ' . $intPart . '<br>';

$square =  sqrt(25);
echo 'Корінь з 25 =  ' . $square . '<br>';

$text = 'Десять негритят пошли купаться в море';
echo '<br> Текст = ' . $text . "<br>";
$words = explode(" ", $text);
echo 'Четверте слово з фрази =  ' . $words[3] . '<br>';

$symbol = mb_substr($text, 16, 1);
echo '17 символ зі строки  =  ' . $symbol . '<br>';

$UpFirstText = mb_convert_case($text, MB_CASE_TITLE, "UTF-8");
echo "Кожне слово з великої букви = " . $UpFirstText . '<br>';

$lengthText = mb_strlen($text);
echo "Довжина строки = " . $lengthText . '<br>';

echo "<br>";

$isTrue = (true == 1);
echo "Твердження true дорівнює 1 = " . ($isTrue ? "так" : "ні") . "<br>";

$isFalse = (false === 0);
echo "Твердження false тождественно  0 = " . ($isFalse ? "так" : "ні") . "<br>";

$firstString = 'three';
$secondString = 'три';
if (mb_strlen($firstString) > mb_strlen($secondString)) {
    $result = $firstString;
} elseif (mb_strlen($firstString) < mb_strlen($secondString)) {
    $result = $secondString;
} else {
    $result = "Вони однакові по довжині";
}
echo "Зі строк three та три більша = " . $result . "<br>";

 $firstMath = 125 * 13 + 7;
 $secondMath =  223 + 28 * 2;
 if ($firstMath > $secondMath) {
    $result = $firstMath;
} elseif ($firstMath < $secondMath) {
    $result = $secondMath;
} else {
    $result = "Вони рівні";
}
 echo "З чисел 125 * 13 + 7 = " . $firstMath . " та 223 + 28 * 2 = " . $secondMath . " більше: " . $result;