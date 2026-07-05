<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Entry
{
    /**
     * 同步车辆入场通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/entry
     */
    public function post(array $options = [
        'json' => [
            'out_serial_number' => 'PARK202407041530001',
            'parking_id' => 'WXPARK001',
            'plate_number' => '粤B12345',
            'enter_timestamp' => 1720078200,
            'plate_color' => 'PLATE_COLOR_BLUE',
            'car_type' => 'PLATE_TYPE_TEMPORARY',
            'vehicle_type' => 'VEHICLE_TYPE_SMALL',
            'entrance_number' => 'A01',
            'entrance_name' => '南门入口',
            'discount_template_id' => [1001],
        ],
    ]): ResponseInterface;

    /**
     * 同步车辆入场通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/entry
     */
    public function postAsync(array $options = [
        'json' => [
            'out_serial_number' => 'PARK202407041530001',
            'parking_id' => 'WXPARK001',
            'plate_number' => '粤B12345',
            'enter_timestamp' => 1720078200,
            'plate_color' => 'PLATE_COLOR_BLUE',
            'car_type' => 'PLATE_TYPE_TEMPORARY',
            'vehicle_type' => 'VEHICLE_TYPE_SMALL',
            'entrance_number' => 'A01',
            'entrance_name' => '南门入口',
            'discount_template_id' => [1001],
        ],
    ]): PromiseInterface;
}
