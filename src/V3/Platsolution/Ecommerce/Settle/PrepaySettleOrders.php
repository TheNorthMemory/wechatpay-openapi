<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Settle;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read PrepaySettleOrders\_settle_batch_no_ $_settle_batch_no_
 */
interface PrepaySettleOrders
{
    /**
     * 个人收款-申请批量结算(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/settle/prepay-settle-orders
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'WXA12368855126622',
            'out_settle_batch_no' => '1236698745558870',
            'individual_auth_id' => '256322110225',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'description' => '共计2笔订单，订单金额xxx元，平台服务费xxx元，合计收款xxx元',
            'trade_scenario' => 'RECOMMERCE',
            'settle_info_list' => [[
                'out_settle_no' => '12369666555136622',
                'transaction_id' => '4207752501201407033233368018',
                'settle_detail_info_list' => [[
                    'out_settle_detail_no' => '123688556699666554',
                    'settle_type' => 'RECEIVE',
                    'receiver_type' => 'MERCHANT',
                    'receiver_account' => '1234567890',
                    'amount' => [
                        'amount' => 11000,
                        'currency' => 'CNY',
                    ],
                ],],
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 个人收款-申请批量结算(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/settle/prepay-settle-orders
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'WXA12368855126622',
            'out_settle_batch_no' => '1236698745558870',
            'individual_auth_id' => '256322110225',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'description' => '共计2笔订单，订单金额xxx元，平台服务费xxx元，合计收款xxx元',
            'trade_scenario' => 'RECOMMERCE',
            'settle_info_list' => [[
                'out_settle_no' => '12369666555136622',
                'transaction_id' => '4207752501201407033233368018',
                'settle_detail_info_list' => [[
                    'out_settle_detail_no' => '123688556699666554',
                    'settle_type' => 'RECEIVE',
                    'receiver_type' => 'MERCHANT',
                    'receiver_account' => '1234567890',
                    'amount' => [
                        'amount' => 11000,
                        'currency' => 'CNY',
                    ],
                ],],
            ],],
        ],
    ]): PromiseInterface;
}
