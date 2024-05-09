<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Businesscircle\Points;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Notify
{
    /**
     * 商圈会员积分同步(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/smart-business-circle/points/notify-points.html
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1234567890',
            'transaction_id' => '1217752501201407033233368018',
            'appid' => 'wx1234567890abcdef',
            'openid' => 'oWmnN4xxxxxxxxxxe92NHIGf1xd8',
            'earn_points' => true,
            'increased_points' => 100,
            'points_update_time' => '2020-05-20T13:29:35.120+08:00',
            'no_points_remarks' => '商品不参与积分活动',
            'total_points' => 888888,
        ],
    ]): ResponseInterface;

    /**
     * 商圈会员积分同步(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/smart-business-circle/points/notify-points.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1234567890',
            'transaction_id' => '1217752501201407033233368018',
            'appid' => 'wx1234567890abcdef',
            'openid' => 'oWmnN4xxxxxxxxxxe92NHIGf1xd8',
            'earn_points' => true,
            'increased_points' => 100,
            'points_update_time' => '2020-05-20T13:29:35.120+08:00',
            'no_points_remarks' => '商品不参与积分活动',
            'total_points' => 888888,
        ],
    ]): PromiseInterface;
}
