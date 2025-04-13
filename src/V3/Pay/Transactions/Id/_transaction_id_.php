<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Transactions\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _transaction_id_
{
    /**
     * 微信支付订单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/id/%7Btransaction_id%7D
     */
    public function get(array $options = [
        'transaction_id' => '1217752501201407033233368018',
        'query' => [
            'mchid' => '1230000109',
        ],
    ]): ResponseInterface;

    /**
     * 微信支付订单号查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/id/%7Btransaction_id%7D
     */
    public function getAsync(array $options = [
        'transaction_id' => '1217752501201407033233368018',
        'query' => [
            'mchid' => '1230000109',
        ],
    ]): PromiseInterface;
}
