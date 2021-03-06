<?php 
class Configuration
{
	// For a full list of configuration parameters refer in wiki page (https://github.com/paypal/sdk-core-php/wiki/Configuring-the-SDK)
	public static function getConfig()
	{
		$config = array(
				// values: 'sandbox' for testing
				//		   'live' for production
                //         'tls' for testing if your server supports TLSv1.2
				"mode" => "sandbox",
                // TLSv1.2 Check: Comment the above line, and switch the mode to tls as shown below
                // "mode" => "tls"

                'log.LogEnabled' => true,
                'log.FileName' => '../PayPal.log',
                'log.LogLevel' => 'FINE'
	
				// These values are defaulted in SDK. If you want to override default values, uncomment it and add your value.
				// "http.ConnectionTimeOut" => "5000",
				// "http.Retry" => "2",
		);
		return $config;
	}
	
	// Creates a configuration array containing credentials and other required configuration parameters.
	public static function getAcctAndConfig()
	{
		$config = array(
				// Signature Credential
				"acct1.UserName" => "vikrant@avainfotech.com",
				"acct1.Password" => "hello2all1",
				"acct1.Signature" => "Af3HzSUz5a2jlbLEK1bJqLYRekJEGam9p0kdR7Pqn5WdPqvHWQ2D5BOkdbnjX7RS6AOF5KkxOMm_Kv9k",
				// Subject is optional and is required only in case of third party authorization
				// "acct1.Subject" => "",
				
				// Sample Certificate Credential
				// "acct1.UserName" => "certuser_biz_api1.paypal.com",
				// "acct1.Password" => "D6JNKKULHN3G5B8A",
				// Certificate path relative to config folder or absolute path in file system
				// "acct1.CertPath" => "cert_key.pem",
				// Subject is optional and is required only in case of third party authorization
				// "acct1.Subject" => "",
		
				);
		
		return array_merge($config, self::getConfig());
	}
}