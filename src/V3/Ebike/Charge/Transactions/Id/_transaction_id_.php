<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ebike\Charge\Transactions\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _transaction_id_
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_6.shtml
     */
    public function get(array $options = [
        'transaction_id' => '25012014070332333018',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_6.shtml#async
     */
    public function getAsync(array $options = [
        'transaction_id' => '25012014070332333018',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
