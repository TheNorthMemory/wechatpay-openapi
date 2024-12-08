<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\GoodsSubsidyActivity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Activities
{
    /**
     * 按区域查询品牌加价购活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/activities
     */
    public function get(array $options = [
        'query' => [
            'city_id' => '',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 按区域查询品牌加价购活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/activities
     */
    public function getAsync(array $options = [
        'query' => [
            'city_id' => '',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): PromiseInterface;
}
