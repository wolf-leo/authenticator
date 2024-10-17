# Google Authenticator

```php
<?php

    public function test()
    {
        $ga      = new \Wolfcode\Authenticator\google\PHPGangstaGoogleAuthenticator();
        $dataUri = $ga->getQRCode('xxx')->getDataUri();
        echo "<img src='$dataUri' alt=''>";
    }

```
