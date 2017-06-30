<?php

interface PayWays{

    public function pay();

}

class payFactory{

    public static function getPayWays($name){

        switch($name){
        case 'aliPay':
            return new aliPay();
        break;
        case 'WeChatPay':
            return new WeChatPay();
        break;
        default:
            throw new ErrorException('no pay method find');
        }
    }

}

class aliPay implements PayWays{

    function pay()
    {
        // TODO: Implement pay() method.
    }
}

class WeChatPay implements PayWays{

    function pay()
    {
        // TODO: Implement pay() method.
    }
}