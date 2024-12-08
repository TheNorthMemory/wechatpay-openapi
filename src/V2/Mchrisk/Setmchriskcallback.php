<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mchrisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Setmchriskcallback
{
    /**
     * 设置风险通知回调链接(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mchrisk/setmchriskcallback
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'callback_url' => 'https://pay.weixin.qq.com/wxpay/risk.action',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 设置风险通知回调链接(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mchrisk/setmchriskcallback
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'callback_url' => 'https://pay.weixin.qq.com/wxpay/risk.action',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
