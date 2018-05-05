<?php
//namespace Drupal\first;

Class APICaller
{
    protected $url;
    protected $params ;

	  function __construct($url,$params )
	  {
		  $this->url = $url;
		  $this->params = $params;
	  }

		 function setUrl($url){
			$this->url = $url;
		 }
		 function setParams($params){
		   $this->params = $params;
		 }
		 function getUrl(){
			return $this->url ;
		 }
		 function getParams(){
			 return $this->params ;
		 }

	  //call API GET method
	  function  callAPI( )
	  {
		$ch = curl_init();
		$url=$this->addParamstoURL();
		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_USERAGENT, "test");
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, true);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		return $response ;
	 }

	 function addParamstoURL()
	 {
	     $url = $this->url;
	     foreach($this->params as $index => $value){
	         if($value != ""){
	    		  $url   = $url .'&' .$index."=".$value;
	    	 }
		 }
		 return $url;
	 }

}

?>