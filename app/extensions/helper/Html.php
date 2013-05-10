<?php

namespace app\extensions\helper;

class Html extends \lithium\template\helper\Html {

    protected $_strings = array(
        'twitter' => '<a href="https://twitter.com/intent/tweet?text={:text}&related=madebyfieldwork" target="_blank">{:link_text}</a>',
        'twitter_url' => '<a href="https://twitter.com/intent/tweet?url={:url}&text={:text}&related=madebyfieldwork" target="_blank">{:link_text}</a>',
        'facebook' => '<a href="http://www.facebook.com/sharer.php?u={:url}" target="_blank">{:link_text}</a>',
        'plus' => '<a href="https://plus.google.com/share?url={:url}" target="_blank">{:link_text}</a>',
    );
    
    public function twitter($text, $url = false, $link_text = 'Twitter') {
        $link_text = $this->escape($link_text);
        $text = urlencode($text);
        if ($url) {
        	return $this->_render(__METHOD__, 'twitter_url', compact('text', 'url', 'link_text'));
        }
        return $this->_render(__METHOD__, 'twitter', compact('text', 'link_text'));
    }
    
    public function facebook($url = false, $link_text = 'Twitter') {
        $link_text = $this->escape($link_text);
        return $this->_render(__METHOD__, 'facebook', compact('url', 'link_text'));
    }
    
    public function plus($url = false, $link_text = 'Twitter') {
        $link_text = $this->escape($link_text);
        return $this->_render(__METHOD__, 'plus', compact('url', 'link_text'));
    }
}

?>