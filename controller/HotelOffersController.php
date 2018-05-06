<?php

require_once "../Model/APICaller.php";


$params = [];
$url = "https://offersvc.expedia.com/offers/v2/getOffers?scenario=deal-finder&page=foo&uid=foo&productType=Hotel";


if(isset($_POST['getOffers'] )){
    $params = $_POST['filters'];
}


$object = new APICaller($url,$params);
$response = $object->callAPI();

//check if the call successed
if($response !== false) {
   $error=false;
   $response = json_decode($response);
   $offers = (isset( $response-> offers->Hotel ))? $response-> offers->Hotel : [];
   if(count($offers)== 0){
      $error = true;
      $errorMessage = "Ops! There isn't any matched offers, Please search again !" ;
   }

}else{
  $error = true;
  $errorMessage = "Ops! There is something wrong, Please try again !" ;
}

 include("../views/hotelOffers_cards.php");






?>


