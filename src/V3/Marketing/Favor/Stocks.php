<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Stocks\_stock_id_ $_stock_id_
 */
interface Stocks
{
    /**
     * 条件查询批次列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_4.shtml
     */
    public function get(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 0,
            'stock_creator_mchid' => '',
            'create_start_time' => '2015-05-20T13:29:35.120+08:00',
            'create_end_time' => '2015-05-20T13:29:35.120+08:00',
            'status' => '',
        ],
    ]): ResponseInterface;

    /**
     * 条件查询批次列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_4.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 0,
            'stock_creator_mchid' => '',
            'create_start_time' => '2015-05-20T13:29:35.120+08:00',
            'create_end_time' => '2015-05-20T13:29:35.120+08:00',
            'status' => '',
        ],
    ]): PromiseInterface;
}
