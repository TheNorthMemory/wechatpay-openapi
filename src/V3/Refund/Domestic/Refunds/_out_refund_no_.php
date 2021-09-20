<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Refund\Domestic\Refunds;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _out_refund_no_
{
    /**
     * 查询单笔退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter3_5_10.shtml
     */
    public function get(array $options = [
        'out_refund_no' => '',
        'query' => [
            'sub_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询单笔退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter3_5_10.shtml#async
     */
    public function getAsync(array $options = [
        'out_refund_no' => '',
        'query' => [
            'sub_mchid' => '',
        ],
    ]): PromiseInterface;
}
