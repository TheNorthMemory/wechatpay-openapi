<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\HirePowerBank;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read InsuranceOrders\_out_order_no_ $_out_order_no_
 */
interface InsuranceOrders
{
    /**
     * 创建保险订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/hire-power-bank-insurance/insurance-orders/create-insurance-order.html
     */
    public function post(array $options = [
        'json' => [
            'out_order_no' => '6e8369071cd942c0476613f9d1ce9ca3',
            'openid' => '2323dfsdf342342',
            'notify_url' => 'https://api.test.com',
            'service_id' => '实例值',
        ],
    ]): ResponseInterface;

    /**
     * 创建保险订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/hire-power-bank-insurance/insurance-orders/create-insurance-order.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_order_no' => '6e8369071cd942c0476613f9d1ce9ca3',
            'openid' => '2323dfsdf342342',
            'notify_url' => 'https://api.test.com',
            'service_id' => '实例值',
        ],
    ]): PromiseInterface;
}
