<?php

require_once("configs.php");
require_once 'cmonitor/csrest_subscribers.php';

if(isset($_GET['list']))
	$wrap = new CS_REST_Subscribers('2800727001a2f1bd3e78976876581fa9', $cm_key);
else
	$wrap = new CS_REST_Subscribers('df11cf9b50bd17cb1ccd8e40023cdfd4', $cm_key);
	
$result = $wrap->add(array(
    'EmailAddress' => $_GET['email'],
    'Resubscribe' => true
));


if($result->was_successful()) {
    echo "Thanks! :)";
} else {
    echo $result->response->Message;
}

?><br/><br/>
<a href="./">Back to the site</a>

