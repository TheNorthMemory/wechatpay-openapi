<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Refunds\_refund_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ReturnAdvance
{
    /**
     * 垫付退款回补(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-refund/refunds/create-return-advance.html
     */
    public function post(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'json' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 垫付退款回补(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-refund/refunds/create-return-advance.html#async
     */
    public function postAsync(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'json' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;

    /**
     * 查询垫付回补结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-refund/refunds/query-return-advance.html
     */
    public function get(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询垫付回补结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-refund/refunds/query-return-advance.html#async
     */
    public function getAsync(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
