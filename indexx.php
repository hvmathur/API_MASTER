<?php
$postUrl = 'http://login.getcatchit.com/api';    
$datatopost = array (
            "rcpt_to" => 'ffgf',
            "to" => 'gdfhfh',
            "subject" => 'dgfdfh',
            "header" => 'sfgdh',
            "appkey"   => 'd782345yj1345778',
            );
/*$datatopost = json_encode($datatopost);
// print_r($datatopost) ;  //{"rcpt_to":"ffgf","to":"gdfhfh","subject":"dgfdfh","header":"sfgdh","body":"DFSGf"}
$data = array ('json' => json_encode($datatopost));
$ch = curl_init($postUrl);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
$info = curl_getinfo($ch);
print_r($info);*/


$content = json_encode($datatopost);
 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK
 
$result     = curl_exec($curl);
$response   = json_decode($result);
var_dump($response);
curl_close($curl);


?>