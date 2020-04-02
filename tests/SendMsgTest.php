<?php
/**
 * PHP File
 * User: nomedia
 * Date: 16/2/17
 * Time: 下午5:12
 */

namespace nomedia\Easemob\Tests;

use backend\models\easemob\EasemobUser;
use nomedia\Easemob\Easemob;
use Yii;

class SendMsgTest extends \PHPUnit\Framework\TestCase
{


    public function testGetGroup()
    {


        //sendMessage

        // 请在phpunit.xml.dist中设置环信账号
        $easemob = Yii::createObject([
            'class' => 'nomedia\Easemob\Easemob',
            'orgName' => isset($_ENV['ORG_NAME']) ? $_ENV['ORG_NAME'] : '',
            'appName' => isset($_ENV['APP_NAME']) ? $_ENV['APP_NAME'] : '',
            'clientId' => isset($_ENV['CLIENT_ID']) ? $_ENV['CLIENT_ID'] : '',
            'clientSecret' => isset($_ENV['CLIENT_SECRET']) ? $_ENV['CLIENT_SECRET'] : '',
        ]);


        $ret = $easemob->getGroup();
        $this->assertArrayHasKey('data', $ret);

        // var_dump($ret);
        //return $ret;

    }

    public function testSendText()
    {
        // 请在phpunit.xml.dist中设置环信账号
        $easemob = Yii::createObject([
            'class' => 'nomedia\Easemob\Easemob',
            'orgName' => isset($_ENV['ORG_NAME']) ? $_ENV['ORG_NAME'] : '',
            'appName' => isset($_ENV['APP_NAME']) ? $_ENV['APP_NAME'] : '',
            'clientId' => isset($_ENV['CLIENT_ID']) ? $_ENV['CLIENT_ID'] : '',
            'clientSecret' => isset($_ENV['CLIENT_SECRET']) ? $_ENV['CLIENT_SECRET'] : '',
        ]);
        //  $ret = $easemob->exportChatMessages();
        //  var_dump($ret);


        $targetType = Easemob::TARGET_TYPE_USERS;
        $target = [
            '131119',
        ];
        $msg = [
            'type' => "txt",
            'msg' => "文字消息内容",
        ];
        $from = "username1";
        $ret = $easemob->sendMessage($targetType, $target, $msg, $from);

    }


    public function testSendImg()
    {
        // 请在phpunit.xml.dist中设置环信账号
        $easemob = Yii::createObject([
            'class' => 'nomedia\Easemob\Easemob',
            'orgName' => isset($_ENV['ORG_NAME']) ? $_ENV['ORG_NAME'] : '',
            'appName' => isset($_ENV['APP_NAME']) ? $_ENV['APP_NAME'] : '',
            'clientId' => isset($_ENV['CLIENT_ID']) ? $_ENV['CLIENT_ID'] : '',
            'clientSecret' => isset($_ENV['CLIENT_SECRET']) ? $_ENV['CLIENT_SECRET'] : '',
        ]);
        //  $ret = $easemob->exportChatMessages();
        //  var_dump($ret);


        //发送目标
        $targetType = Easemob::TARGET_TYPE_USERS;
        $target = [
            'username2',
        ];

        $msg = [
            'type' => "img",
            "filename" => "testimg.jpg",
            "secret" => "VfEpSmSvEeS7yU8dwa9rAQc-DIL2HhmpujTNfSTsrDt6eNb_",
            "url" => "https://a1.easemob.com/easemob-demo/testapp/chatfiles/55f12940-64af-11e4-8a5b-ff2336f03252",
            'msg' => "neiron",
            "size" => [

                "width" => 480,
                "height" => 720
            ],
        ];
        $from = "username1";
        $ret = $easemob->sendMessage($targetType, $target, $msg, $from);
        var_dump($ret);


    }


    public function testSendAudio()
    {
        // 请在phpunit.xml.dist中设置环信账号
        $easemob = Yii::createObject([
            'class' => 'nomedia\Easemob\Easemob',
            'orgName' => isset($_ENV['ORG_NAME']) ? $_ENV['ORG_NAME'] : '',
            'appName' => isset($_ENV['APP_NAME']) ? $_ENV['APP_NAME'] : '',
            'clientId' => isset($_ENV['CLIENT_ID']) ? $_ENV['CLIENT_ID'] : '',
            'clientSecret' => isset($_ENV['CLIENT_SECRET']) ? $_ENV['CLIENT_SECRET'] : '',
        ]);
        //  $ret = $easemob->exportChatMessages();
        //  var_dump($ret);


        //发送目标
        $targetType = Easemob::TARGET_TYPE_USERS;
        $target = [
            'username2',
        ];

        $msg = [
            'type' => "audio",
            "filename" => "testaudio.amr",
            "secret" => "Hfx_WlXGEeSdDW-SuX2EaZcXDC7ZEig3OgKZye9IzKOwoCjM",
            "url" => "https://a1.easemob.com/easemob-demo/testapp/chatfiles/1dfc7f50-55c6-11e4-8a07-7d75b8fb3d42",
            "length" => 10,

        ];
        $from = "username1";
        $ret = $easemob->sendMessage($targetType, $target, $msg, $from);
        var_dump($ret);


    }


    public function testSendVideo()
    {
        // 请在phpunit.xml.dist中设置环信账号
        $easemob = Yii::createObject([
            'class' => 'nomedia\Easemob\Easemob',
            'orgName' => isset($_ENV['ORG_NAME']) ? $_ENV['ORG_NAME'] : '',
            'appName' => isset($_ENV['APP_NAME']) ? $_ENV['APP_NAME'] : '',
            'clientId' => isset($_ENV['CLIENT_ID']) ? $_ENV['CLIENT_ID'] : '',
            'clientSecret' => isset($_ENV['CLIENT_SECRET']) ? $_ENV['CLIENT_SECRET'] : '',
        ]);
        //  $ret = $easemob->exportChatMessages();
        //  var_dump($ret);


        //发送目标
        $targetType = Easemob::TARGET_TYPE_USERS;
        $target = [
            'username2',
        ];

        $msg = [
            'type' => "video",
            "filename" => "testvideo.mp4",
            "secret" => "VfEpSmSvEeS7yU8dwa9rAQc-DIL2HhmpujTNfSTsrDt6eNb_",
            "url" => "https://a1.easemob.com/easemob-demo/testapp/chatfiles/671dfe30-7f69-11e4-ba67-8fef0d502f46",
            "thumb_secret" => "ZyebKn9pEeSSfY03ROk7ND24zUf74s7HpPN1oMV-1JxN2O2I",
            "file_length" => 58103,
            "length" => 0,
            "thumb" => "https://a1.easemob.com/easemob-demo/testapp/chatfiles/67279b20-7f69-11e4-8eee-21d3334b3a97"

        ];
        $from = "username1";
        $ret = $easemob->sendMessage($targetType, $target, $msg, $from);
        var_dump($ret);


    }


    public function testSendLoc()
    {
        // 请在phpunit.xml.dist中设置环信账号
        $easemob = Yii::createObject([
            'class' => 'nomedia\Easemob\Easemob',
            'orgName' => isset($_ENV['ORG_NAME']) ? $_ENV['ORG_NAME'] : '',
            'appName' => isset($_ENV['APP_NAME']) ? $_ENV['APP_NAME'] : '',
            'clientId' => isset($_ENV['CLIENT_ID']) ? $_ENV['CLIENT_ID'] : '',
            'clientSecret' => isset($_ENV['CLIENT_SECRET']) ? $_ENV['CLIENT_SECRET'] : '',
        ]);
        //  $ret = $easemob->exportChatMessages();
        //  var_dump($ret);


        //发送目标
        $targetType = Easemob::TARGET_TYPE_USERS;
        $target = [
            'username2',
        ];

        $msg = [
            'type' => "loc",
            "lat" => "39.966", "lng" => "116.322", "addr" => "中国北京市海淀区中关村"

        ];
        $from = "username1";
        $ret = $easemob->sendMessage($targetType, $target, $msg, $from);
        var_dump($ret);


    }

}