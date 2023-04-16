<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\WeeklyDiscount\Activities;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _activity_id_\Apply $apply
 */
interface _activity_id_
{
    /**
     * 查询周周惠活动详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_1_2.shtml
     */
    public function get(array $options = [
        'activity_id' => '11111',
    ]): ResponseInterface;

    /**
     * 查询周周惠活动详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_1_2.shtml#async
     */
    public function getAsync(array $options = [
        'activity_id' => '11111',
    ]): PromiseInterface;
}
