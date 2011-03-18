<?php
/**
 * sfCryptoCaptcha Config file (mainly for routing)
 *
 * @package    sfCryptoCaptchaPlugin
 * @subpackage form
 * @author     HeNeArKrXeRn <henearkrxern [at] hotmail.fr>
 */

# $this->dispatcher->connect('routing.load_configuration', array('sfCryptoCaptchaPluginRouting', 'listenToRoutingLoadConfigurationEvent'));

$r = sfRouting::getInstance();
// add plug-in routing rules on top of the existing ones
$r->prependRoute('captcha', '/captcha', array('module' => 'sfCryptoCaptcha','action'=>'captcha'));
$r->prependRoute('captcha_refresh', '/captcha/:random', array('module' => 'sfCryptoCaptcha','action'=>'captcha'));



