<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Tradebill
{
    /**
     * 申请交易账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bill/tradebill
     */
    public function get(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'sub_mchid' => '19000000001',
            'bill_type' => 'ALL | SUCCESS | REFUND | RECHARGE_REFUND',
            'tar_type' => 'GZIP',
        ],
    ]): ResponseInterface;

    /**
     * 申请交易账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bill/tradebill
     */
    public function getAsync(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'sub_mchid' => '19000000001',
            'bill_type' => 'ALL | SUCCESS | REFUND | RECHARGE_REFUND',
            'tar_type' => 'GZIP',
        ],
    ]): PromiseInterface;
}
