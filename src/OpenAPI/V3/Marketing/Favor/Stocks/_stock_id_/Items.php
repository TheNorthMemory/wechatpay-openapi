<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Items
{
    /**
     * 查询代金券可用单品(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_8.shtml
     */
    public function get(array $options = [
        'stock_id' => '',
        'query' => [
            'stock_creator_mchid' => '',
            'offset' => 0,
            'limit' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询代金券可用单品(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_8.shtml#async
     */
    public function getAsync(array $options = [
        'stock_id' => '',
        'query' => [
            'stock_creator_mchid' => '',
            'offset' => 0,
            'limit' => '',
        ],
    ]): PromiseInterface;
}
