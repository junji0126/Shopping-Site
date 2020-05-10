<?php
function outputPrice(){
    $kingaku1 = 150 * $_POST["a-n"];
    $kingaku2 = 200 * $_POST["p-n"];
    $kingaku3 = 1000 * $_POST["m-n"];
    $syouhizei = 1.10;
    $souryo = 540;
    $ryoukin = $kingaku1 + $kingaku2 + $kingaku3 * $syouhizei;
    //2000円未満は送料540円
    if ($ryoukin<2000){
        $ryoukin += $souryo;
    }
    return $ryoukin;
}
$goukei = outputPrice();
echo "合計金額は {$goukei}円です。";