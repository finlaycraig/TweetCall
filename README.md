TweetCall
=========

## Tweet with your Voice. ##

TweetCall uses Twilio, Twitter and Google to take recordings from a phonecall and Tweet that to your Twitter Account.

TweetCall is what I used to power a research task for my final year Honours Project in Digital Interaction Design - http://twitter.com/askdundee

Read more about my project at - http://interaction.dundee.ac.uk/~fcraig/wordpress

This makes use of a few of helper libraries.

Twilio is a fantastic telephony service that allows you to easily communicate between your web app and phones over voice calls and sms messages.
One great feature which Twilio offer is recording of calls. The URL's Twilio sends back are pretty long, so running these through the GoogleURL Shortner before tweeting stops any character limit issues.
There are a few things you will need to make this work. 

* Twilio Account (works with free account)
* Twitter App Credentials
* Google URL Shortner API Key

Once you have these you will need to fire the details into the following files.

## url-short.php ##

- Twitter Auth Stuff 

*   'consumer_key'    => '',
*   'consumer_secret' => '',
*   'user_token'      => '',
*   'user_secret'     => '',

- Google URL Shortener API Stuff
   
* $apiKey = '';


## tmhOAuth.php ##

*   'consumer_key'    => '',
*   'consumer_secret' => '',
*   'user_token'      => '',
*   'user_secret'     => '',

## record.php  ##

$twillioNumber = ''; 

Enjoy!

