<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Pay
{
    /**
     * 商户发起催收扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-order/collect-service-order.html
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
        ],
    ]): ResponseInterface;

    /**
     * 商户发起催收扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-order/collect-service-order.html#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
        ],
    ]): PromiseInterface;
}
