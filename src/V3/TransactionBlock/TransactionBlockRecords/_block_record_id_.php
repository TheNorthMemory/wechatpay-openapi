<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TransactionBlock\TransactionBlockRecords;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _block_record_id_
{
    /**
     * 查询子商户交易拦截记录详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transaction-block/transaction-block-records/%7Bblock_record_id%7D
     */
    public function get(array $options = [
        'block_record_id' => '123400',
        'query' => [
            'sub_mchid' => '123000110',
        ],
    ]): ResponseInterface;

    /**
     * 查询子商户交易拦截记录详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transaction-block/transaction-block-records/%7Bblock_record_id%7D
     */
    public function getAsync(array $options = [
        'block_record_id' => '123400',
        'query' => [
            'sub_mchid' => '123000110',
        ],
    ]): PromiseInterface;
}
