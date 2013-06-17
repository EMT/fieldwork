<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

use app\models\Users;
use lithium\storage\Cache;

class TwitterController extends \app\extensions\action\Controller {

	public function tweets() {
		$connection = $this->getConnectionWithAccessToken();
		$tweets = Cache::read('default', 'fw_tweets');
		if (!$tweets) {
			$tweets = $connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=madebyfieldwork&count=1');
			if ($tweets[0]->in_reply_to_status_id_str) {
				$tweets[0]->in_reply_to = $connection->get('https://api.twitter.com/1.1/statuses/show.json?id=' . $tweets[0]->in_reply_to_status_id_str);
			}
			Cache::write('default', 'fw_tweets', $tweets, '+5 minutes');
			$tweets['cached'] = false;
		}
		else {
			$tweets['cached'] = true;
		}
		return $tweets;
	}
	
	protected function getConnectionWithAccessToken() {
		require_once('../../libraries/li3_twitter/twitteroauth/twitteroauth/twitteroauth.php');
		$consumerkey = 'ZWG9VhvVSpgwNgf4PHxvIQ';
		$consumersecret = 'pYnhnDsH3tpAqG9l2gWcJJiP7D2AJRq6BvshZHgpSFc';
		$accesstoken = '771190651-BQTne4ct8cYF7EYvE6Tm57Jwxbi5xcDAnXWaLMSW';
		$accesstokensecret = 'tqz5E3TEDXSjfxYWeNatvR1zZT1kksnpOHEM3ZLIA';
		return new \TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
	}
	
}

?>