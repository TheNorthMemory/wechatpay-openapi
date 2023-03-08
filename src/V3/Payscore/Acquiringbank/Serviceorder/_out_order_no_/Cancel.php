<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 取消订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-order/cancel-acquiring-bank-service-order.html
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'channel_id' => '1230000109',
            'sub_mchid' => '1900000109',
            'reason' => '用户投诉',
        ],
    ]): ResponseInterface;

    /**
     * 取消订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-order/cancel-acquiring-bank-service-order.html#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'channel_id' => '1230000109',
            'sub_mchid' => '1900000109',
            'reason' => '用户投诉',
        ],
    ]): PromiseInterface;
}
