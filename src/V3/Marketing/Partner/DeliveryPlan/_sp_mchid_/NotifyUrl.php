<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\DeliveryPlan\_sp_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface NotifyUrl
{
    /**
     * 设置投放计划回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/%7Bsp_mchid%7D/notify-url
     */
    public function post(array $options = [
        'sp_mchid' => '298689900',
        'json' => [
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 设置投放计划回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/%7Bsp_mchid%7D/notify-url
     */
    public function postAsync(array $options = [
        'sp_mchid' => '298689900',
        'json' => [
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): PromiseInterface;
}
