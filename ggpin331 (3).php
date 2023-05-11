<?php
error_reporting(0);//Syntax mengatasi error Notice
$kode = $_POST['kode'];

//$pecah = explode(" ",$nonsetrip28); //Memecah $kalimat dengan tanda pemisah ialah spasi
$nonsetrip= str_replace(" ", "", $kode);
$nonsetrip1= str_replace("\r\n", "", $nonsetrip);
$nonsetrip2= str_replace("https://www.sharetreats.id/x/brand/common?t=", " ", $nonsetrip1);

$pecah = explode(" ",$nonsetrip2); //Memecah $kalimat dengan tanda pemisah ialah spasi
//$kode = "S7Z-KGA1RKKZAV5G8 S7Z-KGA1RKKZAV5G0 S7Z-KGA1RKKZAV5G8";
$hasil1 = $pecah[1]; 
$a1hasil1 = $pecah[2]; 
$a2hasil1 = $pecah[3]; 
$a3hasil1 = $pecah[4]; 
$a5hasil1 = $pecah[5]; 
$a6hasil1 = $pecah[6]; 
$no7hasil1 = $pecah[6]; 
$no8hasil1 = $pecah[7]; 
$no9hasil1 = $pecah[8]; 
$no10hasil1 = $pecah[9]; 




$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.sharetreats.id/com_trade_hist/detail/json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"pageIndex=1&pageUnit=20&tradeNo=$hasil1&encrypt=true&b2bCode=\n\"}");

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

$data = ($result);
$baru = json_decode($data, true);
   // var_dump($baru);
$new = ($baru['com_trade_hist_detail'][0]['pinNoDec']);

//echo $new;
$gam = ($baru['com_trade_hist_detail'][0]['goodsImg']);
echo '<img src= " https://www.sharetreats.id/'.$gam.'"/>';
echo "<br/>";
echo ' ‎ ‎ ‎ ‎ ';
echo '<img src="https://barcode.tec-it.com/barcode.ashx?data='.$new.'&code=Code128&translate-esc=true" />';
echo "<br/>";

echo ($baru['com_trade_hist_detail'][0]['limitEndDate']);
echo "<br/>";
echo ($baru['com_trade_hist_detail'][0]['pinNoDec']);
echo "<br/>";
echo "KE 1 <br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/>";


$a1ch = curl_init();

curl_setopt($a1ch, CURLOPT_URL, 'https://www.sharetreats.id/com_trade_hist/detail/json');
curl_setopt($a1ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($a1ch, CURLOPT_POST, 1);
curl_setopt($a1ch, CURLOPT_POSTFIELDS, "{\"pageIndex=1&pageUnit=20&tradeNo=$a1hasil1&encrypt=true&b2bCode=\n\"}");

$a1headers = array();
$a1headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($a1ch, CURLOPT_HTTPHEADER, $a1headers);

$a1result = curl_exec($a1ch);
if (curl_errno($a1ch)) {
    echo 'Error:' . curl_error($a1ch);
}

$a1data = ($a1result);
$a1baru = json_decode($a1data, true);
   // var_dump($a1baru);
$a1new = ($a1baru['com_trade_hist_detail'][0]['pinNoDec']);

//echo $a1new;
$a1gam = ($a1baru['com_trade_hist_detail'][0]['goodsImg']);
echo '<img src= " https://www.sharetreats.id/'.$a1gam.'"/>';
echo "<br/>";
echo ' ‎ ‎ ‎ ‎ ';
echo '<img src="https://barcode.tec-it.com/barcode.ashx?data='.$a1new.'&code=Code128&translate-esc=true" />';
echo "<br/>";

echo ($a1baru['com_trade_hist_detail'][0]['limitEndDate']);
echo "<br/>";
echo ($a1baru['com_trade_hist_detail'][0]['pinNoDec']);
echo "<br/>";
echo "KE 2 <br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/>";

$a2ch = curl_init();

curl_setopt($a2ch, CURLOPT_URL, 'https://www.sharetreats.id/com_trade_hist/detail/json');
curl_setopt($a2ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($a2ch, CURLOPT_POST, 1);
curl_setopt($a2ch, CURLOPT_POSTFIELDS, "{\"pageIndex=1&pageUnit=20&tradeNo=$a2hasil1&encrypt=true&b2bCode=\n\"}");

$a2headers = array();
$a2headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($a2ch, CURLOPT_HTTPHEADER, $a2headers);

$a2result = curl_exec($a2ch);
if (curl_errno($a2ch)) {
    echo 'Error:' . curl_error($a2ch);
}

$a2data = ($a2result);
$a2baru = json_decode($a2data, true);
   // var_dump($a2baru);
$a2new = ($a2baru['com_trade_hist_detail'][0]['pinNoDec']);

//echo $a2new;
$a2gam = ($a2baru['com_trade_hist_detail'][0]['goodsImg']);
echo '<img src= " https://www.sharetreats.id/'.$a2gam.'"/>';
echo "<br/>";
echo ' ‎ ‎ ‎ ‎ ';
echo '<img src="https://barcode.tec-it.com/barcode.ashx?data='.$a2new.'&code=Code128&translate-esc=true" />';
echo "<br/>";

echo ($a2baru['com_trade_hist_detail'][0]['limitEndDate']);
echo "<br/>";
echo ($a2baru['com_trade_hist_detail'][0]['pinNoDec']);
echo "<br/>";
echo "KE 3<br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/>";

$a3ch = curl_init();

curl_setopt($a3ch, CURLOPT_URL, 'https://www.sharetreats.id/com_trade_hist/detail/json');
curl_setopt($a3ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($a3ch, CURLOPT_POST, 1);
curl_setopt($a3ch, CURLOPT_POSTFIELDS, "{\"pageIndex=1&pageUnit=20&tradeNo=$a3hasil1&encrypt=true&b2bCode=\n\"}");

$a3headers = array();
$a3headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($a3ch, CURLOPT_HTTPHEADER, $a3headers);

$a3result = curl_exec($a3ch);
if (curl_errno($a3ch)) {
    echo 'Error:' . curl_error($a3ch);
}

$a3data = ($a3result);
$a3baru = json_decode($a3data, true);
   // var_dump($a3baru);
$a3new = ($a3baru['com_trade_hist_detail'][0]['pinNoDec']);

//echo $a3new;
$a3gam = ($a3baru['com_trade_hist_detail'][0]['goodsImg']);
echo '<img src= " https://www.sharetreats.id/'.$a3gam.'"/>';
echo "<br/>";
echo ' ‎ ‎ ‎ ‎ ';
echo '<img src="https://barcode.tec-it.com/barcode.ashx?data='.$a3new.'&code=Code128&translate-esc=true" />';
echo "<br/>";

echo ($a3baru['com_trade_hist_detail'][0]['limitEndDate']);
echo "<br/>";
echo ($a3baru['com_trade_hist_detail'][0]['pinNoDec']);
echo "<br/>";
echo "KE 4 <br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/>";


$a5ch = curl_init();

curl_setopt($a5ch, CURLOPT_URL, 'https://www.sharetreats.id/com_trade_hist/detail/json');
curl_setopt($a5ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($a5ch, CURLOPT_POST, 1);
curl_setopt($a5ch, CURLOPT_POSTFIELDS, "{\"pageIndex=1&pageUnit=20&tradeNo=$a5hasil1&encrypt=true&b2bCode=\n\"}");

$a5headers = array();
$a5headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($a5ch, CURLOPT_HTTPHEADER, $a5headers);

$a5result = curl_exec($a5ch);
if (curl_errno($a5ch)) {
    echo 'Error:' . curl_error($a5ch);
}

$a5data = ($a5result);
$a5baru = json_decode($a5data, true);
   // var_dump($a5baru);
$a5new = ($a5baru['com_trade_hist_detail'][0]['pinNoDec']);

//echo $a5new;
$a5gam = ($a5baru['com_trade_hist_detail'][0]['goodsImg']);
echo '<img src= " https://www.sharetreats.id/'.$a5gam.'"/>';
echo "<br/>";
echo ' ‎ ‎ ‎ ‎ ';
echo '<img src="https://barcode.tec-it.com/barcode.ashx?data='.$a5new.'&code=Code128&translate-esc=true" />';
echo "<br/>";

echo ($a5baru['com_trade_hist_detail'][0]['limitEndDate']);
echo "<br/>";
echo ($a5baru['com_trade_hist_detail'][0]['pinNoDec']);
echo "<br/>";
echo "KE 5 <br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/>";




