<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity\Activities\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Goods
{
    /**
     * 查询活动指定商品列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_6.shtml
     */
    public function get(array $options = [
        'activity_id' => '',
        'query' => [
            'offset' => 0,
            'limit' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 查询活动指定商品列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_6.shtml#async
     */
    public function getAsync(array $options = [
        'activity_id' => '',
        'query' => [
            'offset' => 0,
            'limit' => 0,
        ],
    ]): PromiseInterface;
}
