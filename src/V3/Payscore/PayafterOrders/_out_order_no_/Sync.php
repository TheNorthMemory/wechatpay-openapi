<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\PayafterOrders\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 支付分订单同步(同步模式)
     * @param array<string,mixed> $options
     * @link 由于收款商户进行的某些“线下操作”会导致微信支付侧的订单状态与实际情况不符，例如用户通过线下付款的方式已经完成了支付，而微信支付侧还没有支付成功，此时可能导致用户重复支付。因此商户需要通过订单同步接口将订单状态同步给微信支付，修改订单在微信支付系统中的状态。
注意：本接口只适用于智慧零售、先享后付、免押租借、免押速住的免押订单。

     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'type' => 'Order_Paid',
            'detail' => [
                'paid_time' => '20091225091010',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 支付分订单同步(异步模式)
     * @param array<string,mixed> $options
     * @link 由于收款商户进行的某些“线下操作”会导致微信支付侧的订单状态与实际情况不符，例如用户通过线下付款的方式已经完成了支付，而微信支付侧还没有支付成功，此时可能导致用户重复支付。因此商户需要通过订单同步接口将订单状态同步给微信支付，修改订单在微信支付系统中的状态。
注意：本接口只适用于智慧零售、先享后付、免押租借、免押速住的免押订单。
#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'type' => 'Order_Paid',
            'detail' => [
                'paid_time' => '20091225091010',
            ],
        ],
    ]): PromiseInterface;
}
