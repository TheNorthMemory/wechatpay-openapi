<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Fundflowbill
{
    /**
     * 申请二级商户资金账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/bill/chapter3_5.shtml
     */
    public function get(array $options = [
        'json' => [
            'bill_date' => '2019-06-11',
            'account_type' => 'ALL',
            'tar_type' => 'GZIP',
            'algorithm' => 'AEAD_AES_256_GCM',
        ],
    ]): ResponseInterface;

    /**
     * 申请二级商户资金账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/bill/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'json' => [
            'bill_date' => '2019-06-11',
            'account_type' => 'ALL',
            'tar_type' => 'GZIP',
            'algorithm' => 'AEAD_AES_256_GCM',
        ],
    ]): PromiseInterface;
}
