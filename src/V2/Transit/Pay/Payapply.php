<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Transit\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Payapply
{
    /**
     * 申请扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/transit/pay/payapply
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'sign_type' => 'HMAC-SHA256',
            'body' => '公交代扣',
            'detail' => '公交代扣：A 公交代扣：B 公交代扣：C',
            'attach' => '自定义参数',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => 'WXG',
            'notify_url' => 'http://yoursite.com/wxpay.html',
            'trade_type' => 'PAP',
            'contract_id' => 'Wx15463511252015071056489715',
            'trade_scene' => 'METRO',
            'scene_info' => \json_encode([
                'scene_info' => [
                    'start_time' => '20170826104339',
                    'end_time' => '20170826114339',
                    'qrcode_hash' => 'a756836e7432437d98bbf07bdde2942c99f6a2ab88a72b60aa747fce54b093c6',
                    'start_station' => '西单',
                    'end_station' => '天安门西',
                ],
            ]),
            'clientip' => '119.145.83.6',
            'deviceid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'mobile' => '18933432355',
            'email' => 'aobama@whitehouse.com',
            'qq' => '100243',
            'openid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'creid' => '110102199701011000',
            'outerid' => 'user123',
            'version' => '2.0',
        ],
    ]): ResponseInterface;

    /**
     * 申请扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/transit/pay/payapply
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'sign_type' => 'HMAC-SHA256',
            'body' => '公交代扣',
            'detail' => '公交代扣：A 公交代扣：B 公交代扣：C',
            'attach' => '自定义参数',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => 'WXG',
            'notify_url' => 'http://yoursite.com/wxpay.html',
            'trade_type' => 'PAP',
            'contract_id' => 'Wx15463511252015071056489715',
            'trade_scene' => 'METRO',
            'scene_info' => \json_encode([
                'scene_info' => [
                    'start_time' => '20170826104339',
                    'end_time' => '20170826114339',
                    'qrcode_hash' => 'a756836e7432437d98bbf07bdde2942c99f6a2ab88a72b60aa747fce54b093c6',
                    'start_station' => '西单',
                    'end_station' => '天安门西',
                ],
            ]),
            'clientip' => '119.145.83.6',
            'deviceid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'mobile' => '18933432355',
            'email' => 'aobama@whitehouse.com',
            'qq' => '100243',
            'openid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'creid' => '110102199701011000',
            'outerid' => 'user123',
            'version' => '2.0',
        ],
    ]): PromiseInterface;
}
