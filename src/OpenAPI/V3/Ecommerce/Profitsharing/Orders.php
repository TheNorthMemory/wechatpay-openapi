<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Orders
{
    /**
     * 请求分账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/profitsharing/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'appid' => '',
            'sub_mchid' => '',
            'transaction_id' => '',
            'out_order_no' => '',
            'receivers' => [],
            'finish' => '',
        ],
    ]): ResponseInterface;

    /**
     * 请求分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/profitsharing/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => '',
            'sub_mchid' => '',
            'transaction_id' => '',
            'out_order_no' => '',
            'receivers' => [],
            'finish' => '',
        ],
    ]): PromiseInterface;

    /**
     * 查询分账结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/profitsharing/chapter3_2.shtml
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '',
            'transaction_id' => '',
            'out_order_no' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询分账结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/profitsharing/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '',
            'transaction_id' => '',
            'out_order_no' => '',
        ],
    ]): PromiseInterface;
}
