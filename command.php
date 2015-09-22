<?php

require_once dirname(__FILE__) . '/lib/alipay.class.php';

$alipay = new Alipay(array(
    'cookie' => '', //支付宝Cookie
    'notify' => '', //通知地址
    'token' => 'please_input_your_token'    //安全密钥
    ));

while (true) {
    echo date('Y-m-d H:i:s') . "\n";
    $alipay->run();
    usleep(5000000);
}