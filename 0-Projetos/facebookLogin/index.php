<?php

use Facebook\Exceptions\FacebookResponseException;

    include('config.php');

    if(isset($accessToken)) {

        if(isset($_SESSION['facebook_access_token'])) {

            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

        }else {

            $_SESSION['facebook_access_token'] = (string)$accessToken;
            $oAuth2Client = $fb->getOAuth2Client();

            $longLiveAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
            $_SESSION['facebook_access_token'] = (string)$longLiveAccessToken;

            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

        }

        if(isset($_GET['code'])) {
            header('Loaction: ./');
        }

        try {
            $profileRequest = $fb->get("/me?fields=name,first_name,last_name,email,link,gender,locale,picture");
            $fbUserProfile = $profileRequest->getGraphNode()->asArray();
        }catch(FacebookResponseException $e) {

        }

        $fbUserData = [

            'oauth_provider' => 'Facebook',
            'oauth_uid' => $fbUserProfil['id'],
            'first_name' => $fbUserProfile['first_name'],
            'last_name' => $fbUserProfile['last_name']

        ];

        $userData = $fbUserData;

        $_SESSION['userData'] = $fbUserData;

        $logoutUrl = $helper->getLogoutUrl($accessToken, REDIRECT.'logout.php');

        if(!empty($userData)) {

            $output = '';
            $output .= "<p>Nome: $userData[first_name]</p>";
            $output .= "<p>Sobrenome: $userData[last_name]</p>";

            $output .= "<a href='$logoutUrl'>Loggout</a>";

        }else {
            $output = "<p style='color: red'>Ocorreu um erro</p>";
        }

    }else {

        $loginUrl = $helper->getLoginUrl(REDIRECT, $permissions);
        $output = "<a href='$loginUrl'>Faça login com Facebook</a>";

    }

    echo $output;

?>