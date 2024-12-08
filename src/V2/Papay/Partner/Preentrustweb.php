<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Preentrustweb
{
    /**
     * APP纯签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay_v2/papay/chapter5_2.shtml
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '1200009811',
            'sub_appid' => 'wxcbda96de0b165489',
            'sub_mch_id' => '1900000109',
            'plan_id' => '12535',
            'contract_code' => '100000',
            'request_serial' => '1000',
            'contract_display_account' => '微信代扣',
            'notify_url' => '',
            'version' => '1.0',
            'sign_type' => 'MD5',
            'timestamp' => '1414488825',
            'return_app' => 'Y',
        ],
        'nonceless' => true,
    ]): ResponseInterface;

    /**
     * APP纯签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay_v2/papay/chapter5_2.shtml#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '1200009811',
            'sub_appid' => 'wxcbda96de0b165489',
            'sub_mch_id' => '1900000109',
            'plan_id' => '12535',
            'contract_code' => '100000',
            'request_serial' => '1000',
            'contract_display_account' => '微信代扣',
            'notify_url' => '',
            'version' => '1.0',
            'sign_type' => 'MD5',
            'timestamp' => '1414488825',
            'return_app' => 'Y',
        ],
        'nonceless' => true,
    ]): PromiseInterface;
}
