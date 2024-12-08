<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Partner\Transactions\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _transaction_id_
{
    /**
     * 微信支付订单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/id/%7Btransaction_id%7D
     */
    public function get(array $options = [
        'transaction_id' => '',
        'query' => [
            'sp_mchid' => '',
            'sub_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 微信支付订单号查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/id/%7Btransaction_id%7D
     */
    public function getAsync(array $options = [
        'transaction_id' => '',
        'query' => [
            'sp_mchid' => '',
            'sub_mchid' => '',
        ],
    ]): PromiseInterface;
}
