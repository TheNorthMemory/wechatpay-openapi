<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Vehicle\Partnerpay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Notification
{
    /**
     * 用户入场通知api(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/vehicle/partnerpay/notification
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'sub_appid' => 'wxcbda96de0b165489',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'version' => '3.0',
            'trade_scene' => 'PARKING',
            'scene_info' => \json_encode([
                'scene_info' => [
                    'start_time' => '20170826104339',
                    'notify_url' => 'https://weixin.qq.com',
                    'plate_number' => '粤B888888',
                    'car_type' => '小型车',
                    'parking_name' => '欢乐海岸停车场',
                    'free_time' => '1200',
                ],
            ]),
        ],
    ]): ResponseInterface;

    /**
     * 用户入场通知api(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/vehicle/partnerpay/notification
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'sub_appid' => 'wxcbda96de0b165489',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'version' => '3.0',
            'trade_scene' => 'PARKING',
            'scene_info' => \json_encode([
                'scene_info' => [
                    'start_time' => '20170826104339',
                    'notify_url' => 'https://weixin.qq.com',
                    'plate_number' => '粤B888888',
                    'car_type' => '小型车',
                    'parking_name' => '欢乐海岸停车场',
                    'free_time' => '1200',
                ],
            ]),
        ],
    ]): PromiseInterface;
}
