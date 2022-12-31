<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Contractorder
{
    /**
     * 支付中签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_13&index=5
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '1200009811',
            'contract_mchid' => '1200009811',
            'contract_appid' => 'wxcbda96de0b165486',
            'out_trade_no' => '123456',
            'device_info' => '013467007045764',
            'body' => 'Ipadmini16G白色',
            'detail' => 'Ipadmini16G白色',
            'attach' => '深圳分店',
            'notify_url' => 'http://yoursite.com',
            'total_fee' => '888',
            'spbill_create_ip' => '123.12.12.123',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'goods_tag' => 'WXG',
            'trade_type' => 'JSAPI',
            'product_id' => '12235413214070356458058',
            'limit_pay' => 'no_credit',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'plan_id' => '123',
            'contract_code' => '100001256',
            'contract_display_account' => '123',
            'contract_notify_url' => 'http://yoursite.com',
        ],
    ]): ResponseInterface;

    /**
     * 支付中签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_13&index=5#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '1200009811',
            'contract_mchid' => '1200009811',
            'contract_appid' => 'wxcbda96de0b165486',
            'out_trade_no' => '123456',
            'device_info' => '013467007045764',
            'body' => 'Ipadmini16G白色',
            'detail' => 'Ipadmini16G白色',
            'attach' => '深圳分店',
            'notify_url' => 'http://yoursite.com',
            'total_fee' => '888',
            'spbill_create_ip' => '123.12.12.123',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'goods_tag' => 'WXG',
            'trade_type' => 'JSAPI',
            'product_id' => '12235413214070356458058',
            'limit_pay' => 'no_credit',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'plan_id' => '123',
            'contract_code' => '100001256',
            'contract_display_account' => '123',
            'contract_notify_url' => 'http://yoursite.com',
        ],
    ]): PromiseInterface;
}
