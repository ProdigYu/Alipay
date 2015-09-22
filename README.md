# Alipay
PHP支付宝免签接口
# 用法

打开command.php修改如下内容。

    $alipay = new Alipay(array(
      'cookie' => '', //支付宝Cookie
      'notify' => '', //通知地址
      'token' => 'please_input_your_token'    //安全密钥
    ));

关于Cookie需要登录支付宝后点击账单然后按下F12，然后再console上面输入document.cookie复制cookie填写cookie。然后执行
  
    php command.php
