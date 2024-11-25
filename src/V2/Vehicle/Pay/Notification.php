<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Vehicle\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Notification
{
    /**
     * 用户入场通知api(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/vehicle_v2.php?chapter=20_992&index=1
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'sign_type' => 'HMAC-SHA256',
            'version' => '3.0',
            'trade_scene' => 'PARKING',
            'scene_info' => '{"scene_info":{"start_time":"20170926114339","plate_number":"CB1000sdfasd","free_time":"1200","car_type":"大型车","parking_name":"欢乐海岸停车场"}}',
        ],
    ]): ResponseInterface;

    /**
     * 用户入场通知api(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/vehicle_v2.php?chapter=20_992&index=1#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'sign_type' => 'HMAC-SHA256',
            'version' => '3.0',
            'trade_scene' => 'PARKING',
            'scene_info' => '{"scene_info":{"start_time":"20170926114339","plate_number":"CB1000sdfasd","free_time":"1200","car_type":"大型车","parking_name":"欢乐海岸停车场"}}',
        ],
    ]): PromiseInterface;
}
