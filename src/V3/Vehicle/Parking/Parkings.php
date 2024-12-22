<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Vehicle\Parking;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Parkings
{
    /**
     * 创建停车入场(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/parking/parkings
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_parking_no' => '1231243',
            'plate_number' => '粤B888888',
            'plate_color' => 'BLUE',
            'notify_url' => 'https://yoursite.com/wxpay.html',
            'start_time' => '2017-08-26T10:43:39+08:00',
            'parking_name' => '欢乐海岸停车场',
            'free_duration' => 3600,
        ],
    ]): ResponseInterface;

    /**
     * 创建停车入场(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/parking/parkings
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_parking_no' => '1231243',
            'plate_number' => '粤B888888',
            'plate_color' => 'BLUE',
            'notify_url' => 'https://yoursite.com/wxpay.html',
            'start_time' => '2017-08-26T10:43:39+08:00',
            'parking_name' => '欢乐海岸停车场',
            'free_duration' => 3600,
        ],
    ]): PromiseInterface;
}
