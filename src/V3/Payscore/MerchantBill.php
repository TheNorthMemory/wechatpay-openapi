<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface MerchantBill
{
    /**
     * 商户申请获取对账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter6_1_29.shtml
     */
    public function get(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'tar_type' => 'GZIP',
            'encryption_algorithm' => 'AEAD_AES_256_GCM',
            'service_id' => '2002000000000558128851361561536',
        ],
    ]): ResponseInterface;

    /**
     * 商户申请获取对账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter6_1_29.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'tar_type' => 'GZIP',
            'encryption_algorithm' => 'AEAD_AES_256_GCM',
            'service_id' => '2002000000000558128851361561536',
        ],
    ]): PromiseInterface;
}
