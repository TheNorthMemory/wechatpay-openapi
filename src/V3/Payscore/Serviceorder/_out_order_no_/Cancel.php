<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 取消支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-order/cancel-service-order.html
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'reason' => '用户投诉',
        ],
    ]): ResponseInterface;

    /**
     * 取消支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-order/cancel-service-order.html#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'reason' => '用户投诉',
        ],
    ]): PromiseInterface;
}
