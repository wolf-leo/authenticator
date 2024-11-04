<?php

/**
 * @throws Exception
 */
function test(): string
{
    $ga     = new \Wolfcode\Authenticator\google\PHPGangstaGoogleAuthenticator();
    $secret = $ga->createSecret(32);
    // xxx You can customize the name displayed in the APP
    // xxx 可以自定义在APP中显示的名称
    return $ga->getQRCode('xxx', $secret)->getDataUri();
    // "<img src='{$dataUri}' alt=''>";
}

// $code: Random code on the app
function checkCode($secret, $code): bool
{
    $ga    = new \Wolfcode\Authenticator\google\PHPGangstaGoogleAuthenticator();
    $check = $ga->verifyCode($secret, $code);
    return $code;
}