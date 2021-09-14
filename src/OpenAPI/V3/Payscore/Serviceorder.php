<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Serviceorder\_out_order_no_ $_out_order_no_
 * @property-read Serviceorder\DirectComplete $directComplete
 */
interface Serviceorder
{
    /**
     * 创建支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
        ],
    ]): ResponseInterface;

    /**
     * 创建支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
        ],
    ]): PromiseInterface;

    /**
     * 查询支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_2.shtml
     */
    public function get(array $options = [
        'query' => [
            'out_order_no' => '',
            'query_id' => '',
            'service_id' => '',
            'appid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'out_order_no' => '',
            'query_id' => '',
            'service_id' => '',
            'appid' => '',
        ],
    ]): PromiseInterface;
}
