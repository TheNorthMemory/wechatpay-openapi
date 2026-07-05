<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Exit_
{
    /**
     * 同步车辆离场通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/exit
     */
    public function post(array $options = [
        'json' => [
            'out_serial_number' => 'PARK202407041530001',
            'exit_timestamp' => 1720081800,
            'plate_number' => '粤B12345',
            'plate_color' => 'PLATE_COLOR_BLUE',
            'parking_id' => 'WXPARK001',
            'pay_state' => 'PAY_STATUS_PAID',
            'pay_type' => 'PAY_TYPE_WXPAY',
            'out_trade_no' => 'TRADE202407041530001',
            'total_amount' => 1500,
            'paid_amount' => 1500,
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'pay_channel' => 'PAY_CHANNEL_WECHAT_PAY_NOTIF',
            'pay_time' => 1720081800,
            'token' => 'token1234567890',
            'wx_trade_no' => '4200001999202407041234567890',
        ],
    ]): ResponseInterface;

    /**
     * 同步车辆离场通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/exit
     */
    public function postAsync(array $options = [
        'json' => [
            'out_serial_number' => 'PARK202407041530001',
            'exit_timestamp' => 1720081800,
            'plate_number' => '粤B12345',
            'plate_color' => 'PLATE_COLOR_BLUE',
            'parking_id' => 'WXPARK001',
            'pay_state' => 'PAY_STATUS_PAID',
            'pay_type' => 'PAY_TYPE_WXPAY',
            'out_trade_no' => 'TRADE202407041530001',
            'total_amount' => 1500,
            'paid_amount' => 1500,
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'pay_channel' => 'PAY_CHANNEL_WECHAT_PAY_NOTIF',
            'pay_time' => 1720081800,
            'token' => 'token1234567890',
            'wx_trade_no' => '4200001999202407041234567890',
        ],
    ]): PromiseInterface;
}
