<?php

class Get 
{
	public $_token;
	public $_url;
	public $_fbid;
	public $_fbname;
	public $_u;

	public function __construct()
	{
        include '_token.php';
// 		$this->_url = $_GET['url'];
	}


	public function tachurl()
	{
		$_u =str_replace(array('https://www.facebook.com/','profile.php?id=','https://m.facebook.com/',' ','https://www.facebook.com/groups/','groups','/','https://www.facebook.com/profile.php?id='), '', $this->_url);

		$_a = substr($_u, 0, strpos($_u, "&"));
		$_a = substr($_u, 0, strpos($_u, "?"));
		$_i = (!$_a ? $_u : $_a);
		if(!$_i ? $this->_u = $this->_url : $this->_u =  $_i );
	}

	public function user()
	{
		$_g="https://graph.facebook.com/".$this->_u."?fields=name,id&access_token=".$this->_token;
		$_gc=file_get_contents($_g);
		$_gd=json_decode($_gc);
		$this->_fbid = $_gd->id;
		$this->_fbname = $_gd->name;
		if($this->_fbid ? '' : print "");

	}

}
