<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ParkingFee
{
    /**
     * 查询停车费用(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/parking-fee
     */
    public function post(array $options = [
        'json' => [
            'out_serial_number' => 'PARK202407041530001',
            'plate_number' => '粤B12345',
            'out_parking_id' => 'lot_sz_tencent_001',
        ],
    ]): ResponseInterface;

    /**
     * 查询停车费用(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/parking-fee
     */
    public function postAsync(array $options = [
        'json' => [
            'out_serial_number' => 'PARK202407041530001',
            'plate_number' => '粤B12345',
            'out_parking_id' => 'lot_sz_tencent_001',
        ],
    ]): PromiseInterface;
}
