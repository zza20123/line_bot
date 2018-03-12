<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'adb3a53da1e8dea064c3f725154a4825';
$access_token  = 'JlTAZvIGV5XmwFLezTAvI6gscguh/8076faOq4K4+7USnOCZKEJVGrWDT9Lphce2Bchr3EPDgg1MpVNepops6r+F6hf1SYEk3Hs3ddTR/TbvA/wMppKeDWJCWPza9YmtyrcCU79j2okYD3rS1ybbhQdB04t89/1O/w1cDnyilFU=
';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
