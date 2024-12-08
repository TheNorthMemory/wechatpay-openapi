<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Fundflowbill
{
    /**
     * 申请资金账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bill/fundflowbill
     */
    public function get(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'sub_mchid' => '',
            'account_type' => 'BASIC | OPERATION | FEES',
            'tar_type' => 'GZIP',
        ],
    ]): ResponseInterface;

    /**
     * 申请资金账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bill/fundflowbill
     */
    public function getAsync(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'sub_mchid' => '',
            'account_type' => 'BASIC | OPERATION | FEES',
            'tar_type' => 'GZIP',
        ],
    ]): PromiseInterface;
}
