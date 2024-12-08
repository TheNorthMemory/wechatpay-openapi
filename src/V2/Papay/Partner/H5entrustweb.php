<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface H5entrustweb
{
    /**
     * H5纯签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay_v2/papay/chapter5_4.shtml
     */
    public function get(array $options = [
        'query' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '1200009811',
            'sub_appid' => 'wxcbda96de0b165489',
            'sub_mch_id' => '1900000109',
            'plan_id' => '12535',
            'contract_code' => '100000',
            'request_serial' => '1000',
            'contract_display_account' => '微信代扣',
            'notify_url' => 'https://weixin.qq.com',
            'version' => '1.0',
            'sign' => 'C380BEC2BFD727A4B6845133519F3AD6',
            'sign_type' => 'HMAC-SHA256',
            'timestamp' => '1414488825',
            'clientip' => '119.145.83.6',
            'deviceid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'mobile' => '18933432355',
            'email' => 'aobama@whitehouse.com',
            'qq' => '100243',
            'openid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'creid' => '110102199701011000',
            'outerid' => 'user123',
            'return_appid' => 'wxcbda96de0b165486',
        ],
    ]): ResponseInterface;

    /**
     * H5纯签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay_v2/papay/chapter5_4.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '1200009811',
            'sub_appid' => 'wxcbda96de0b165489',
            'sub_mch_id' => '1900000109',
            'plan_id' => '12535',
            'contract_code' => '100000',
            'request_serial' => '1000',
            'contract_display_account' => '微信代扣',
            'notify_url' => 'https://weixin.qq.com',
            'version' => '1.0',
            'sign' => 'C380BEC2BFD727A4B6845133519F3AD6',
            'sign_type' => 'HMAC-SHA256',
            'timestamp' => '1414488825',
            'clientip' => '119.145.83.6',
            'deviceid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'mobile' => '18933432355',
            'email' => 'aobama@whitehouse.com',
            'qq' => '100243',
            'openid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'creid' => '110102199701011000',
            'outerid' => 'user123',
            'return_appid' => 'wxcbda96de0b165486',
        ],
    ]): PromiseInterface;
}
