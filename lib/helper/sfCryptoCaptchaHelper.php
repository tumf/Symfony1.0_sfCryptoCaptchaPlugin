<?php

function captcha_image()
{
  $ret = '<img id="captcha_img" src="'.url_for('sfCryptoCaptcha/captcha').'" alt="Captcha Image">';
	return $ret;
}

function captcha_reload_button()
{
  $reload_img = sfConfig::get('sf_web_dir'.'/sfCryptoCaptchaPlugin/images/reload.png', '/sfCryptoCaptchaPlugin/images/reload.png');
	$refresh_url = url_for('sfCryptoCaptcha/captcha');
  $onclick = 'javascript:document.getElementById(\'captcha_img\').src=\''.$refresh_url.'/\'+Math.round(Math.random(0)*1000)+1';
	$ret = '<a style="cursor:pointer" onclick="'.$onclick.'">'.image_tag($reload_img).'</a>';
	return $ret;
}
