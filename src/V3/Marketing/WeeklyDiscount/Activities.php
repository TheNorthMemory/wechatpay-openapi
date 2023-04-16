<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\WeeklyDiscount;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Activities\_activity_id_ $_activity_id_
 */
interface Activities
{
    /**
     * 查询周周惠活动列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_1_3.shtml
     */
    public function get(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'applying_merchant_id' => 10000098,
            'store_id' => 1111111,
            'activity_area_code' => 110000,
            'activity_scene' => 'SCAN_CODE_TO_ORDER',
        ],
    ]): ResponseInterface;

    /**
     * 查询周周惠活动列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_1_3.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'applying_merchant_id' => 10000098,
            'store_id' => 1111111,
            'activity_area_code' => 110000,
            'activity_scene' => 'SCAN_CODE_TO_ORDER',
        ],
    ]): PromiseInterface;
}
