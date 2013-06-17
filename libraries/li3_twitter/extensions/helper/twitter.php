<?php


namespace li3_assets\extensions\helper;



class Optimize extends \lithium\template\Helper {

	public function latestTweets($twitteruser, $notweets) {		  
		$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
		$tweets = $connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=' . $twitteruser . '&count=' . $notweets);
		return $tweets;
	}
	
	protected function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
		require_once('twitteroauth/twitteroauth/twitteroauth.php');
		$consumerkey = 'ZWG9VhvVSpgwNgf4PHxvIQ';
		$consumersecret = 'pYnhnDsH3tpAqG9l2gWcJJiP7D2AJRq6BvshZHgpSFc';
		$accesstoken = '771190651-BQTne4ct8cYF7EYvE6Tm57Jwxbi5xcDAnXWaLMSW';
		$accesstokensecret = 'tqz5E3TEDXSjfxYWeNatvR1zZT1kksnpOHEM3ZLIA';
		return new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
	}

}

?>