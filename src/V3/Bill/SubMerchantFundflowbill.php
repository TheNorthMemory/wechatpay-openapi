<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
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
            'sub_mchid' => '',
            'bill_date' => '',
            'tar_type' => '',
            'algorithm' => '',
            'account_type' => '',
        ],
    ]): ResponseInterface;

    /**
     * 申请单个子商户资金账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter4_1_12.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '',
            'bill_date' => '',
            'tar_type' => '',
            'algorithm' => '',
            'account_type' => '',
        ],
    ]): PromiseInterface;
}
