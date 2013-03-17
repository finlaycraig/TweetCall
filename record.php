<?php
	
	require('url-short.php');
	
    // tell the caller that they should listen to their howl
    // and play the recording back, using the URL that Twilio posted
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    
    $twillioNumber = '';//Needs to be formatted like +44201234567 ... dropping the leading zero and replacing with +44 for the UK for example.
	
?>
<Response>
    <Say>Thanks, take a listen to what you recorded.</Say>
    <Play><?php echo $_REQUEST['RecordingUrl']; ?></Play>
    <Sms from="<?=$twillioNumber;?>" to="<?php $_REQUEST['From'];?>">Here is your recording - <?php echo shortn($_REQUEST['RecordingUrl']); ?>.</Sms>
    <Say>Your recording is now on Twitter! Goodbye.</Say>
</Response>