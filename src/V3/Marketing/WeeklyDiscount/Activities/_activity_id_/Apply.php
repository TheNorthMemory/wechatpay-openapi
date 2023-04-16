<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\WeeklyDiscount\Activities\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 报名周周惠活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_1_1.shtml
     */
    public function post(array $options = [
        'activity_id' => '11111',
        'json' => [
            'applying_merchant_id' => 10000098,
            'store_id' => 111111,
        ],
    ]): ResponseInterface;

    /**
     * 报名周周惠活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_1_1.shtml#async
     */
    public function postAsync(array $options = [
        'activity_id' => '11111',
        'json' => [
            'applying_merchant_id' => 10000098,
            'store_id' => 111111,
        ],
    ]): PromiseInterface;
}
