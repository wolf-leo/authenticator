# PHP 常用身份验证器

```shell
composer require wolfcode/authenticator
```

> To enable two-factor authentication, you'll need an app that supports TOTP such as
>
> [2FAS](https://2fas.com/), [Google Authenticator](https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2), or [KeePassXC](https://keepassxc.org/).

## Google Authenticator

```php
<?php
    // base on https://github.com/PHPGangsta/GoogleAuthenticator
    public function test()
    {
        $ga     = new \Wolfcode\Authenticator\google\PHPGangstaGoogleAuthenticator();
        $secret = $ga->createSecret(32);
        // xxx You can customize the name displayed in the APP 
        // xxx 可以自定义在APP中显示的名称
        $dataUri = $ga->getQRCode('xxx',$secret);
        return $dataUri;
        // "<img src='{$dataUri}' alt=''>";
    }
    
    // $code: Random code on the app
    public function checkCode($secret,$code)
    {
        $ga     = new \Wolfcode\Authenticator\google\PHPGangstaGoogleAuthenticator();
        $check  = $ga->verifyCode($secret,$code);
        var_dump($check);
    }
```

## Microsoft Authenticator

```php
    public function test()
    {
        // Not yet supported
    }
```
