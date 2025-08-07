<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TransactionBlock\TransactionBlockRecords\SubMchid;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 分页查询子商户名下的交易拦截记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transaction-block/transaction-block-records/sub-mchid/%7Bsub_mchid%7D
     */
    public function get(array $options = [
        'sub_mchid' => '123000110',
        'query' => [
            'limit' => 5,
            'offset' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 分页查询子商户名下的交易拦截记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transaction-block/transaction-block-records/sub-mchid/%7Bsub_mchid%7D
     */
    public function getAsync(array $options = [
        'sub_mchid' => '123000110',
        'query' => [
            'limit' => 5,
            'offset' => 10,
        ],
    ]): PromiseInterface;
}
