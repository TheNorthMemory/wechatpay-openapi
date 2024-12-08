<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\GoodsSubsidyActivity\RetailStoreAct\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Representatives
{
    /**
     * 查询零售小店活动业务代理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/retail-store-act/%7Bactivity_id%7D/representatives
     */
    public function get(array $options = [
        'activity_id' => '3118550000000004',
        'query' => [
            'offset' => 0,
            'limit' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询零售小店活动业务代理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/retail-store-act/%7Bactivity_id%7D/representatives
     */
    public function getAsync(array $options = [
        'activity_id' => '3118550000000004',
        'query' => [
            'offset' => 0,
            'limit' => 10,
        ],
    ]): PromiseInterface;
}
