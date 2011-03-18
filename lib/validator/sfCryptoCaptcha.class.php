<?php

/**
 * sfValidatorsfCryptoCaptcha checks that the token is valid.
 *
 * @package    sfCryptoCaptchaPlugin
 * @subpackage validator
 * @author     HeNeArKrXeRn <henearkrxern [at] hotmail.fr>
 */

class sfCryptoCaptchaValidator extends sfValidator
{
  public function execute(&$value, &$error)
  {
    $captcha = new sfCryptoCaptcha(false);
    if(!$captcha->testCaptcha($value)){
        $error = $this->getParameterHolder()->get('captcha_error');
        return false;
    }
    return true;
  }
  public function initialize($context, $parameters = null)
  {
      // initialize parent
      parent::initialize($context);
      $this->getParameterHolder()->set('captcha_error',  'Invalid input');
      $this->getParameterHolder()->add($parameters);
  }
}
