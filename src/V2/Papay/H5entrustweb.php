<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface H5entrustweb
{
    /**
     * H5纯签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/h5entrustweb
     */
    public function get(array $options = [
        'query' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '1200009811',
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
            'return_appid' => 'wxcbda96de0b165486',
        ],
    ]): ResponseInterface;

    /**
     * H5纯签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/h5entrustweb
     */
    public function getAsync(array $options = [
        'query' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '1200009811',
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
            'return_appid' => 'wxcbda96de0b165486',
        ],
    ]): PromiseInterface;
}
