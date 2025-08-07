<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TransactionBlock\TransactionBlockSubmissions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _block_submission_id_
{
    /**
     * 查询交易拦截申诉详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transaction-block/transaction-block-submissions/%7Bblock_submission_id%7D
     */
    public function get(array $options = [
        'block_submission_id' => 'B021234566799876aacsecd',
    ]): ResponseInterface;

    /**
     * 查询交易拦截申诉详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transaction-block/transaction-block-submissions/%7Bblock_submission_id%7D
     */
    public function getAsync(array $options = [
        'block_submission_id' => 'B021234566799876aacsecd',
    ]): PromiseInterface;
}
