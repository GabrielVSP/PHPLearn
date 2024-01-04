<?php

    session_start();

    include('facebook-php-sdk/autoload.php');
    use Facebook\Facebook;
    use Facebook\Exceptions\FacebookResponseException;
    use Facebook\Exceptions\FacebookSDKException;

    define('APP_ID', '1105624833749840');
    define('SECRET_KEY', 'c50f46a5c4f1a669e2ebcd2f78fd4adb');
    define('REDIRECT', 'http://localhost/cursoDanki/0-Projetos/facebookLogin/');

    $permissions = ['email'];

    $fb = new Facebook([
        'app_id' => APP_ID,
        'app_secret' => SECRET_KEY,
        'default_graph_version' => 'v18.0'
    ]);

    $helper = $fb->getRedirectLoginHelper();

    try {
        
        if(isset($_SESSION['facebook_access_token'])) {
            $accessToken = $_SESSION['facebook_access_token'];
        }else {
            $accessToken = $helper->getAccessToken();
        }

    } catch (FacebookResponseException $e) {
        throw $e;
    }

?>