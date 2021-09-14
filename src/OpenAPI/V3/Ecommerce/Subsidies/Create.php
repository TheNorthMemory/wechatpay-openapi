<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Subsidies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Create
{
    /**
     * 请求补差(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/subsidies/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '',
            'transaction_id' => '',
            'amount' => 0,
            'description' => '',
            'refund_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 请求补差(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/subsidies/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '',
            'transaction_id' => '',
            'amount' => 0,
            'description' => '',
            'refund_id' => '',
        ],
    ]): PromiseInterface;
}
