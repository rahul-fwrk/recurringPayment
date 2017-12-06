<?php

$req = 'cmd=' . urlencode('_notify-validate');

    	foreach ($_POST as $key => $value) {
        	$value = urlencode(stripslashes($value));
        	$req .= "&$key=$value";
    	}

    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/cgi-bin/webscr');
    	curl_setopt($ch, CURLOPT_HEADER, 0);
    	curl_setopt($ch, CURLOPT_POST, 1);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: www.developer.paypal.com'));
    	$res = curl_exec($ch);
    	curl_close($ch);
   	 $myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
   	 fwrite($myfile, print_r($_POST, true));
   	 fclose($myfile);
   	 
   	 

    	if (strcmp($res, "VERIFIED") == 0) {

        	print_r($_POST);

                // Do anything Here....
   		 
   	 }

?>