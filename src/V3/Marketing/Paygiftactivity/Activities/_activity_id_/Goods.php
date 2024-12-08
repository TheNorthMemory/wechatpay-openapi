<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity\Activities\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Goods
{
    /**
     * 查询活动指定商品列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities/%7Bactivity_id%7D/goods
     */
    public function get(array $options = [
        'activity_id' => '',
        'query' => [
            'offset' => 1,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询活动指定商品列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/paygiftactivity/activities/%7Bactivity_id%7D/goods
     */
    public function getAsync(array $options = [
        'activity_id' => '',
        'query' => [
            'offset' => 1,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
