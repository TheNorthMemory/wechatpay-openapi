<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ExtPayment
{
    /**
     * 同步非临停扩展支付(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/ext-payment
     */
    public function post(array $options = [
        'json' => [
            'out_trade_no' => 'TRADE202407041530001',
            'fee_items' => [[
                'fee_type' => 'EXT_PARKING_PAYMENT_FEE_TYPE_MONTHLY',
                'amount' => 5000,
            ],],
            'pay_time' => 1719128975,
            'wx_parking_lot_id' => '21232735744117624001123604298240',
            'wx_trade_no' => '4200001999202407041234567890',
        ],
    ]): ResponseInterface;

    /**
     * 同步非临停扩展支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/ext-payment
     */
    public function postAsync(array $options = [
        'json' => [
            'out_trade_no' => 'TRADE202407041530001',
            'fee_items' => [[
                'fee_type' => 'EXT_PARKING_PAYMENT_FEE_TYPE_MONTHLY',
                'amount' => 5000,
            ],],
            'pay_time' => 1719128975,
            'wx_parking_lot_id' => '21232735744117624001123604298240',
            'wx_trade_no' => '4200001999202407041234567890',
        ],
    ]): PromiseInterface;
}
