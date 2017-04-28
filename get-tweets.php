<?php
session_start();
require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "twitter_username"; //Twitter Username
$notweets = 30;
/*$consumerkey = "12345"; //Consumer Key
$consumersecret = "123456789";//Consumer Secret
$accesstoken = "123456789"; //Access Token
$accesstokensecret = "12345"; //Access Token Secret*/

$consumerkey = "H9kGBO2OuNJN8uKNzG96Q"; //Consumer Key
$consumersecret = "VBJesQNZopxJisigY6cvwhtS4zwJiRqEzQ13PeL7RNc";//Consumer Secret
$accesstoken = "339268643-WZIoZRvA8Tl3gJPUbr8fLx22YrKr76cmeYsS6N7w"; //Access Token
$accesstokensecret = "yrk94no7gqITJxlssH68unHE9UB329g2roqCve6tlY"; //Access Token Secret

 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>