<?php 

function shortn($url) {

require 'twitter/tmhOAuth.php';
require 'twitter/tmhUtilities.php';
$tmhOAuth = new tmhOAuth(array(
  'consumer_key'    => '',
  'consumer_secret' => '',
  'user_token'      => '',
  'user_secret'     => '',
));

//This is the URL you want to shorten
$longUrl = $url;
$apiKey = '';
//Get API key from : http://code.google.com/apis/console/

$postData = array('longUrl' => $longUrl, 'key' => $apiKey);
$jsonData = json_encode($postData);

$curlObj = curl_init();

curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url');
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlObj, CURLOPT_HEADER, 0);
curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
curl_setopt($curlObj, CURLOPT_POST, 1);
curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

$response = curl_exec($curlObj);

//change the response json string to object
$json = json_decode($response);

curl_close($curlObj);

//var_dump($tmhOAuth);

$tweet = "It's ".date('l jS \of F Y h:i:s A')." and someone is speaking ... ".$json->id;

$code = $tmhOAuth->request('POST', $tmhOAuth->url('1/statuses/update'), array(
  'status' => $tweet
));

if ($code == 200) {
  tmhUtilities::pr(json_decode($tmhOAuth->response['response']));
} else {
  tmhUtilities::pr($tmhOAuth->response['response']);
}

return $json->id;

}

?>