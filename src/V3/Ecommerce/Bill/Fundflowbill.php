<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Fundflowbill
{
    /**
     * 申请二级商户资金账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/bill/fundflowbill
     */
    public function get(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'account_type' => 'ALL',
            'tar_type' => 'GZIP',
            'algorithm' => 'AEAD_AES_256_GCM | SM4_GCM',
        ],
    ]): ResponseInterface;

    /**
     * 申请二级商户资金账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/bill/fundflowbill
     */
    public function getAsync(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'account_type' => 'ALL',
            'tar_type' => 'GZIP',
            'algorithm' => 'AEAD_AES_256_GCM | SM4_GCM',
        ],
    ]): PromiseInterface;
}
