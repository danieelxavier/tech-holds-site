<?php


require '../twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $consumer_key = "Yee8K1zm2C8G3xbYJiANrqD2Z";
    $consumer_secret = "IgZeYXLhODuWIV3gXDu6xjD9sxCDzTm4jGg9UMBMDEpSJJkbbF";
    $access_token = "1028434140-hriFIpvgzAzZcovCPwV5yYeM0s0D79QFUjq0lW4";
    $access_token_secret = "HpMOMsS5Lz1U6BKGLAlVN1w29iFAS0AkePIBYERct6gGx";


    $userName = "danieelxavier";

    // options
    $limit = 6;
    $exclude_replies = 'true';
    $screen_name = "TechHolds";


    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
    $content = $connection->get("account/verify_credentials");

    $tweets = $connection->get("statuses/user_timeline", array('count' => $limit,
                                                                    'exclude_replies' => $exclude_replies,
                                                                    'screen_name' => $screen_name,
                                                                    'tweet_mode' => 'extended'));


    foreach ($tweets as $key => $tweet) {
        $name = $tweet->user->screen_name;
        $text = $tweet->full_text;
        $tweet_id = $tweet->id;

//        $parts = explode('http', $text);
//        $text = $parts[0];

        $return_arr[] = array(
            "name_user" => $name,
            "text" => $text,
            "url" => "https://twitter.com/".$name."/status/".$tweet_id
        );
    }


    echo json_encode($return_arr);
}

?>