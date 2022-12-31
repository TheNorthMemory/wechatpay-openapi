<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SubMerchantFundflowbill
{
    /**
     * 申请单个子商户资金账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter4_1_12.shtml
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '19000000001',
            'bill_date' => '2019-06-11',
            'tar_type' => 'GZIP',
            'algorithm' => 'AEAD_AES_256_GCM',
            'account_type' => 'BASIC',
        ],
    ]): ResponseInterface;

    /**
     * 申请单个子商户资金账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter4_1_12.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '19000000001',
            'bill_date' => '2019-06-11',
            'tar_type' => 'GZIP',
            'algorithm' => 'AEAD_AES_256_GCM',
            'account_type' => 'BASIC',
        ],
    ]): PromiseInterface;
}
