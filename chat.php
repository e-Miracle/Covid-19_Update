<?php
   require_once 'vendor/autoload.php';

   use BotMan\BotMan\BotMan;
   use BotMan\BotMan\BotManFactory;
   use BotMan\BotMan\Drivers\DriverManager;
   
   $config = [
    // Your driver-specific configuration
    // "telegram" => [
    //    "token" => "TOKEN"
    // ]
];

   DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

   $botman = BotManFactory::create($config);
//$botman = resolve('botman');
  // Give the bot something to listen for.
$botman->hears('Hello', function (BotMan $bot) {
    $bot->reply('Hello dear.');
});

$botman->hears('Father', function (BotMan $bot) {

  $reply = 'So thoughtful of you to want to know my Dad; His name is <b>Chibuzo Miracle</b>, with Slack username <b>@eMiracle</b>';
    $bot->reply($reply);
});

$botman->hears('symptoms', function (BotMan $bot) {
  $reply = "<strong>Most common symptoms:</strong>
1. fever,
 2. dry cough, 
3. tiredness <br>
<strong>Less common symptoms:</strong>
1. aches and pains 
2. sore throat 
3. diarrhoea 
4. conjunctivitis 
5. headache 
6. loss of taste or smell 
7. a rash on skin, or discolouration of fingers or toes <br>
<strong>Serious symptoms:</strong>
1. difficulty breathing or shortness of breath 
2. chest pain or pressure 
3. loss of speech or movement ";
    $bot->reply($reply);
});

$botman->hears('Help', function (BotMan $bot) {

  $reply = "1. For Covid-19 Live Update in Nigeria, enter 'Covid-19 Update' <br> 2. For State help lines enter 'State Helpline' (replace state with your state)<br> 3. For symptoms enter 'symptoms' <br> 4. To know my writer enter 'Father' ";
    $bot->reply($reply);
});

$botman->hears('{state} Helpline', function (BotMan $bot, $state) {


if ($state=="Benue") {
  $reply = "Benue State 09018602439
07025031214
08033696511 ";
}elseif ($state=="FCT") {
  $reply = "Federal Capital Territory 08099936312
08099936313
08099936314
07080631500";
}elseif ($state =="Kogi") {
  $reply = "07088292249
08150953486
08095227003
07043402122";
}elseif ($state=="Kwara") {
  $reply = "Kwara State 09062010001
09062010002";
}elseif ($state == "Nasarawa") {
  $reply ="Nasarawa State  08036018579
08035871718
08033254549
08036201904
08032910826
08121243191 09010999945
09010999946 ";
}elseif ($state=="Niger") {
  $reply = "Niger State 08038246018
09093093642
08077213070";
}elseif ($state =="Plateau") {
  $reply = "Plateau State 07032864444
08035422711
08065486416
08035779917";
}elseif ($state=="Adamawa") {
  $reply = "08031230359
07080601139
08115850085
07025040415
09044235334 08115850085
07025040415
09044235334 Twitter.com/covid19Adamawa
Facebook: Covid19 Adamawa";
}elseif ($state=="Borno") {
  $reply = "08088159881 080099999999";
}elseif ($state=="Bauchi") {
  $reply = "08059600898
08036916398";
}elseif ($state == "Gombe") {
  $reply = "08103371257
07026256569
07045257107
07025227843
07026761392
07026799901
07042145504";
}elseif ($state == "Taraba") {
  $reply = "08065508675
08032501165
08039359368
08037450227";
}elseif ($state == "Yobe") {
  $reply == "08131834764
07041116027";
}elseif ($state=="Jigawa") {
  $reply= "08035997118
08036440532
08069323005
08038806682
07035997118
08038629331 Jigawa State Covid-19 Tasks Force Hot/Toll-free Lines:
08068725224
08034864266";
}elseif ($state=="Kaduna") {
  $reply = "08035871662
08025088304
08032401473
08037808191";
}elseif ($state=="Kano") {
  $reply = "08039704476
08037038597
09093995333
09093995444";
}elseif ($state=="Katsina") {
  $reply="09035037114
09047092428";
}elseif ($state=="Kebbi") {
  $reply = "08036782507
08036074588
08032907601
07035606421
08067677723
08167597029
08083400849
Case Management,
Kebbi State Medical Centre, Kalgo:
07046352309
07046407663
07046935560";
}elseif ($state=="Sokoto") {
  $reply = "08032311116
08022069567
08035074228
07031935037
08036394462";
}elseif ($state=="Zamfara") {
  $reply = "08035626731
08035161538
08161330774
08065408696
08105009888
08063075385";
}elseif ($state=="Abia") {
  $reply = "07002242362
0700 ABIA DOC";
}elseif ($state=="Anambra") {
  $reply = "09034728047
09034668319
08163594310
09034663273
09145434416
08117567363
09033805959 (WHATSAPP)
09074285546 (SMS)";
}elseif ($state=="Ebony") {
  $reply= "09020332489
08159279460
07045910340
07085763054";
}elseif ($state=="Enugu") {
  $reply="08182555550
09022333833";
}elseif ($state=="Imo") {
  $reply="09059995559 - GLO
09040045164 - AIRTEL
07043954215 - MTN.";
}elseif ($state=="Akwa Ibom") {
  $reply = "08189411111
09045575515
07035211919
08028442194
08037934966
09023330092";
}elseif ($state=="Bayelsa") {
  $reply = "08039216821
07019304970
08151693570";
}elseif($state=="Cross River"){
 $reply = "09036281412
08050907736 (WhatsApp)
08031230527"; 
}elseif ($state=="Delta") {
  $reply = "0803 123 0480
0803 123 0481
0803 123 0528
0803 123 0529
090 10 9999 33
090 10 9999 34  08031230021
08005000100";
}elseif ($state=="Edo") {
  $reply = "08084096723
08064258163
08035835529";
}elseif ($state=="Rivers") {
  $reply = "08056109538
08031888093
08033124314";
}elseif ($state=="Ogun") {
  $reply = "08188978393
08188978392";
}elseif ($state == "Ondo") {
  $repl = "0700COVID19 (07002684319)
0701COVID19 (07012684319)
0800COVID19 (08002684319)";
}elseif ($state =="Osun") {
  $reply = "08035025692
08033908772
08056456250 
293";
}elseif ($state=="Oyo") {
  $repl = "08095394000
08095963000
08078288999
08078288800   oyocovid19eoc@yahoo.co";
}elseif ($state=="Ekiti") {
  $reply = "09062970434
09062970435
09062970436";
}elseif ($state=="Lagos") {
  $repl = "08023169485
08033565529
08052817243
08028971864
08059758886
08035387653 08000CORONA";
}else{
  $reply = 'Sorry, I did not understand these commands. Here is a list of commands I understand: ...';
}
    $bot->reply($reply);

});


$botman->hears('Covid-19 Update', function (BotMan $bot) {
extract($_POST);
$url = 'https://covidnigeria.herokuapp.com/api';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);

$reply = 'Total samples tested is: ' .$response['data']['totalSamplesTested']. '<br> Total Confirmed cases is: '.$response['data']['totalConfirmedCases'].'<br> Total Active cases is: '.$response['data']['totalActiveCases'].'<br> Total discharged is: '.$response['data']['discharged'].'<br> Total deaths is: '.$response['data']['death'];
//print_r($response);
//echo $reply;
    $bot->reply($reply);
});



$botman->fallback(function($bot) {
    $bot->reply("Sorry, I did not understand these commands. Enter Help to see a list of what i can do<br> or visit <a href = 'https://covid19.ncdc.gov.ng/'>NCDC's Website</a> for more info");
});

// Start listening
$botman->listen();
?>
