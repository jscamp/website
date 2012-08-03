<?php

require_once 'cmonitor/csrest_subscribers.php';

$wrap = new CS_REST_Subscribers('df11cf9b50bd17cb1ccd8e40023cdfd4', '2255226594e361beba12b9dafe536c6c');
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

