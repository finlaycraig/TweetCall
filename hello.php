<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    
    $call_length = 10;//10 second call length by default but you can change this.
?>
<Response>
    <Say>Hello.</Say>
    <Say>Please record your second message after the tone, and it will be shared on your Twitter Account.</Say>
    <Record maxLength="<?= $call_length;?>" action="record.php" />
</Response>