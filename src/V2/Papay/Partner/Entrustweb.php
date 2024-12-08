<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Entrustweb
{
    /**
     * 公众号纯签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/partner/entrustweb
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
            'timestamp' => '1414488825',
            'return_web' => '1',
        ],
    ]): ResponseInterface;

    /**
     * 公众号纯签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/partner/entrustweb
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
            'timestamp' => '1414488825',
            'return_web' => '1',
        ],
    ]): PromiseInterface;
}
