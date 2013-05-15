<?php

namespace app\extensions\helper;

class Share extends \lithium\template\helper\Html {

	private $_fb_app_id = '456569247759258';

    protected $_strings = array(
    	'twitter' => '<a href="https://twitter.com/intent/tweet?{:qs}" target="_blank">{:link_text}</a>',
        'facebook' => '<a href="https://www.facebook.com/dialog/feed?{:qs}" target="_blank">{:link_text}</a>',
        'plus' => '<a href="https://plus.google.com/share?{:qs}" target="_blank">{:link_text}</a>',
        'tumblr' => '<a href="http://www.tumblr.com/share/photo?{:qs}" target="_blank">{:link_text}</a>',
        'pinterest' => '<a href="http://pinterest.com/pin/create/button/?{:qs}" target="_blank">{:link_text}</a>'
    );
    
    public function twitter(array $params, $link_text = 'Tweet') {
    	$params = $params + array(
    		'url' => '',
    		'text' => '',
    		'related' => ''
    	);
    	$params['url'] = ($params['url']) ?: $this->currentPageUrl();
    	return $this->getSocialLink('twitter', $params, $link_text);
    }
    
    public function facebook(array $params, $link_text = 'Share') {
    	$params = $params + array(
    		'link' => '',
    		'app_id' => $this->_fb_app_id,
    		'picture' => '',
    		'name' => '',
    		'description' => '',
    		'redirect_uri' => ''
    	);
    	$params['link'] = ($params['link']) ?: $this->currentPageUrl();
    	$params['redirect_uri'] = ($params['redirect_uri']) ?: $params['link'];
    	return $this->getSocialLink('facebook', $params, $link_text);
    }
    
    public function plus(array $params, $link_text = 'Plus') {
        $params = $params + array(
    		'url' => ''
    	);
    	$params['url'] = ($params['url']) ?: $this->currentPageUrl();
        return $this->getSocialLink('plus', $params, $link_text);
    }
    
    public function tumblr(array $params, $link_text = 'Tumbl') {
        $params = $params + array(
    		'source' => '',		//	Image URL
    		'caption' => '',
    		'click_thru' => ''
    	);
    	$params['click_thru'] = ($params['click_thru']) ?: $params['source'];
        return $this->getSocialLink('tumblr', $params, $link_text);
    }
    
    public function pinterest(array $params, $link_text = 'Pin') {
        $params = $params + array(
    		'url' => '',		//	Page URL
    		'media' => '',		//	Image/video URL
    		'description' => ''
    	);
    	$params['url'] = ($params['url']) ?: $this->currentPageUrl();
        return $this->getSocialLink('pinterest', $params, $link_text);
    }
    
    public function getSocialLink($type, $query_string_params, $link_text) {
	    $qs = http_build_query(array_filter($query_string_params), '', '&amp;');
        $link_text = $this->escape($link_text);
        return $this->_render(__METHOD__, $type, compact('qs', 'link_text'));
    }
    
    public function currentPageUrl() {
		$url = $this->baseUrl() . $_SERVER['REQUEST_URI'];
		return $url;
	}
	
	public function baseUrl() {
		$url = 'http';
		$url .= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '';
		$url .= '://' . $_SERVER['SERVER_NAME'];
		$url .= ($_SERVER['SERVER_PORT'] != '80') ? (':' . $_SERVER['SERVER_PORT']) : '';
		return $url;
	}
}

?>