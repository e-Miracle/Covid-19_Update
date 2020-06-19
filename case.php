<?php extract($_POST);
$url = 'https://covidnigeria.herokuapp.com/api';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);

$reply = 'Total samples tested is: ' .$response['data']['totalSamplesTested']. '<br> Total Confirmed cases is: '.$response['data']['totalConfirmedCases'].'<br> Total Active cases is: '.$response['data']['totalActiveCases'].'<br> Total discharged is: '.$response['data']['discharged'].'<br> Total deaths is: '.$response['data']['death'];
print_r($response);
//echo $reply;
?>