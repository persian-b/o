<?php
require_once('./line_class.php');
require_once('./unirest-php-master/src/Unirest.php');
$channelAccessToken = 'XvOs71zwF0kEM/IzrJOchDvHUOjIIsCbjIn8RUtGlgW1Qu3EDPSvjoCP61bZhrbmrmjoeGd0wZvT3BQSfftYkUC+S4HMQWmp0rHO0DXb3+B5qwWHNl1nJBACNJGBP8U1OEDjGPHsXGQnhu1vye82gwdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '2e49cc936658f2cde43181ec640c18d0';//sesuaikan
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId     = $client->parseEvents()[0]['source']['userId'];
$groupId    = $client->parseEvents()[0]['source']['groupId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp  = $client->parseEvents()[0]['timestamp'];
$type       = $client->parseEvents()[0]['type'];
$message    = $client->parseEvents()[0]['message'];
$messageid  = $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = explode(" ", $message['text']);
$msg_type = $message['type'];
$command = $pesan_datang[0];
$options = $pesan_datang[1];
if (count($pesan_datang) > 2) {
    for ($i = 2; $i < count($pesan_datang); $i++) {
        $options .= '+';
        $options .= $pesan_datang[$i];
    }
}
#--------------------------------------------------#
if($message['type']=='text') {
        if ($command == '1' || $command == '2' ) {

        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array(
                array(
                    'type' => 'text',
                    'text' => '2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0..ᖼ.O.ᗱ.ᗴ.ℕ.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0..ᖼ.O.ᗱ.ᗴ.ℕ.♡.~.☆.💖.💔.💙.'.$profil->displayName
                )
            )
        );
    }
}
//pesan bergambar
if($message['type']=='text') {
        if ($command == 'a' || $command == 'b' ) {

        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array(
                array(
                    'type' => 'text',
                    'text' => '2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0..ᖼ.O.ᗱ.ᗴ.ℕ.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.0.2.0.3.4.1.W.0.3.4.1.4.3.0.3.4.1.W.0.3.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0.2.4.1.W.0.5.4.1.4.3.0..ᖼ.O.ᗱ.ᗴ.ℕ.♡.~.☆.💖.💔.💙.'.$profil->displayName
                )
            )
        );
    }
}
//pesan bergambar
#------------------------------------------------#
if($message['type']=='text') {
        if ($command == '/light') { 
     
        $result = light($options);
        $balas = array( 
            'replyToken' => $replyToken, 
            'messages' => array( 
                array ( 
                        'type' => 'template', 
                          'altText' => '☻▬═★ᖼOᗱᗴℕ★═▬☻', 
                          'template' =>  
                          array ( 
                            'type' => 'buttons', 
                            'thumbnailImageUrl' => $result, 
                            'imageAspectRatio' => 'rectangle', 
                            'imageSize' => 'cover', 
                            'imageBackgroundColor' => '#FFFFFF', 
                            'title' => 'Teks Image Generator', 
                            'text' => 'Cek Full Image', 
                            'actions' =>  
                            array ( 
                              0 =>  
                              array ( 
                                'type' => 'uri', 
                                'label' => 'Click Here', 
                                'uri' => $result, 
                              ), 
                            ), 
                          ), 
                        ) 
            ) 
        ); 
    }
}
if (isset($balas)) {
    $result = json_encode($balas);
//$result = ob_get_clean();
    file_put_contents('./balasan.json', $result);
    $client->replyMessage($balas);
}
?>
