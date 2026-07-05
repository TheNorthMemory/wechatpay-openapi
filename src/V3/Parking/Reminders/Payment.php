<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Payment
{
    /**
     * 同步支付结果通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/payment
     */
    public function post(array $options = [
        'json' => [
            'out_serial_number' => 'PARK202407041530001',
            'plate_number' => '粤B12345',
            'parking_id' => 'WXPARK001',
            'parking_state' => 'PARKING_STATUS_PARKING',
            'pay_type' => 'PAY_TYPE_WXPAY',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_mchid' => '1900000109',
            'total_amount' => 1500,
            'paid_amount' => 1500,
            'out_trade_no' => 'TRADE202407041530001',
            'pay_channel' => 'PAY_CHANNEL_WECHAT_PAY_NOTIF',
            'pay_time' => 1720081800,
            'token' => 'token1234567890',
            'wx_trade_no' => '4200001999202407041234567890',
        ],
    ]): ResponseInterface;

    /**
     * 同步支付结果通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/payment
     */
    public function postAsync(array $options = [
        'json' => [
            'out_serial_number' => 'PARK202407041530001',
            'plate_number' => '粤B12345',
            'parking_id' => 'WXPARK001',
            'parking_state' => 'PARKING_STATUS_PARKING',
            'pay_type' => 'PAY_TYPE_WXPAY',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_mchid' => '1900000109',
            'total_amount' => 1500,
            'paid_amount' => 1500,
            'out_trade_no' => 'TRADE202407041530001',
            'pay_channel' => 'PAY_CHANNEL_WECHAT_PAY_NOTIF',
            'pay_time' => 1720081800,
            'token' => 'token1234567890',
            'wx_trade_no' => '4200001999202407041234567890',
        ],
    ]): PromiseInterface;
}
