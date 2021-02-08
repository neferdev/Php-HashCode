<?php 
public function hashCode($userId) /// user id parametresi gönderdim , siz istediğiniz parametreyi gönderebilirsiniz.
	{
      $str = rand(0,999999);
      print_r(sha1(base64_encode($userId.$str)));
      die();
	}
