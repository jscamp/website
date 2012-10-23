<?php

$key = "2255226594e361beba12b9dafe536c6c";

require_once 'cmonitor/csrest_subscribers.php';

if(isset($_GET['list']))
	$wrap = new CS_REST_Subscribers('2800727001a2f1bd3e78976876581fa9', $key);
else
	$wrap = new CS_REST_Subscribers('df11cf9b50bd17cb1ccd8e40023cdfd4', $key);
	
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

