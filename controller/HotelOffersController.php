<?php

require_once "../Model/APICaller.php";
//use Drupal\first\APICaller;

if(isset($_POST['getOffers'] )){
//echo "<pre>";
//var_dump($_POST);die;

$params = $_POST['filters'];
}
$url = "https://offersvc.expedia.com/offers/v2/getOffers?scenario=deal-finder&page=foo&uid=foo&productType=Hotel";
//$params = ['lengthOfStay' => '7'];

$object = new APICaller($url,$params);

$response = $object->callAPI();

$response = json_decode($response);
$offers = $response-> offers->Hotel;

//echo "<br>";
//var_dump($offers);die;



include("../views/hotelOffers_cards.php");

?>


