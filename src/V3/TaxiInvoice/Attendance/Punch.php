<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\Attendance;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Punch
{
    /**
     * 签到签退(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/attendance/punch-attendance.html
     */
    public function post(array $options = [
        'json' => [
            'plate_number' => '粤B12345',
            'driver_license' => '6298416',
            'event_time' => '2019-12-01T12:00:00.000+08:00',
            'event_type' => 'SIGN_IN',
            'region_id' => 510100,
        ],
    ]): ResponseInterface;

    /**
     * 签到签退(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/attendance/punch-attendance.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'plate_number' => '粤B12345',
            'driver_license' => '6298416',
            'event_time' => '2019-12-01T12:00:00.000+08:00',
            'event_type' => 'SIGN_IN',
            'region_id' => 510100,
        ],
    ]): PromiseInterface;
}
