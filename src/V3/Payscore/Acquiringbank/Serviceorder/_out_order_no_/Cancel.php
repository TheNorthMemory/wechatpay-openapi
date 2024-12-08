<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 从业机构取消微信支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/acquiringbank/serviceorder/%7Bout_order_no%7D/cancel
     */
    public function post(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'channel_id' => '1230000109',
            'sub_mchid' => '1900000109',
            'reason' => '用户投诉',
        ],
    ]): ResponseInterface;

    /**
     * 从业机构取消微信支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/acquiringbank/serviceorder/%7Bout_order_no%7D/cancel
     */
    public function postAsync(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'channel_id' => '1230000109',
            'sub_mchid' => '1900000109',
            'reason' => '用户投诉',
        ],
    ]): PromiseInterface;
}
