<?php
$curl = curl_init();
 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_URL, 'https://api-3t.sandbox.paypal.com/nvp');
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(
    'USER' => 'vkrtteee@gmail.com',
    'PWD' => 'hello2all1',
    'SIGNATURE' => 'Af3HzSUz5a2jlbLEK1bJqLYRekJEGam9p0kdR7Pqn5WdPqvHWQ2D5BOkdbnjX7RS6AOF5KkxOMm_Kv9k',
 
    'METHOD' => 'GetExpressCheckoutDetails',
    'VERSION' => '108',
 
    'TOKEN' => 'access_token$sandbox$6gb6rjnjz6rfdgfj$80c61c3495d5802155bce02fda7ef148'
)));
 
$response =    curl_exec($curl);
 
curl_close($curl);
 
$nvp = array();
 
if (preg_match_all('/(?<name>[^\=]+)\=(?<value>[^&]+)&?/', $response, $matches)) {
    foreach ($matches['name'] as $offset => $name) {
        $nvp[$name] = urldecode($matches['value'][$offset]);
    }
}
 
print_r($nvp);