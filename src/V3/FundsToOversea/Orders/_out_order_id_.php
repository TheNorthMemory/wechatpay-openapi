<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundsToOversea\Orders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _out_order_id_
{
    /**
     * 查询出境结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_10_3.shtml
     */
    public function get(array $options = [
        'out_order_id' => 'merchant123123',
        'query' => [
            'sub_mchid' => '1231231',
            'transaction_id' => '4200000000000',
        ],
    ]): ResponseInterface;

    /**
     * 查询出境结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_10_3.shtml#async
     */
    public function getAsync(array $options = [
        'out_order_id' => 'merchant123123',
        'query' => [
            'sub_mchid' => '1231231',
            'transaction_id' => '4200000000000',
        ],
    ]): PromiseInterface;
}
