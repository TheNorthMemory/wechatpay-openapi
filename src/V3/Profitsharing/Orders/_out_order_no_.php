<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing\Orders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _out_order_no_
{
    /**
     * 查询分账结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_2.shtml
     */
    public function get(array $options = [
        'out_order_no' => '',
        'query' => [
            'sub_mchid' => '',
            'transaction_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询分账结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_2.shtml#async
     */
    public function getAsync(array $options = [
        'out_order_no' => '',
        'query' => [
            'sub_mchid' => '',
            'transaction_id' => '',
        ],
    ]): PromiseInterface;
}