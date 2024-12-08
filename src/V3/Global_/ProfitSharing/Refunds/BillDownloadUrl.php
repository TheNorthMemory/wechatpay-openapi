<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\ProfitSharing\Refunds;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface BillDownloadUrl
{
    /**
     * 获取分账退款账单下载链接(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/profit-sharing/refunds/bill-download-url
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'query' => [
            'sub_mchid' => '1900000109',
            'bill_date' => '2020-01-01',
        ],
    ]): ResponseInterface;

    /**
     * 获取分账退款账单下载链接(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/profit-sharing/refunds/bill-download-url
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'query' => [
            'sub_mchid' => '1900000109',
            'bill_date' => '2020-01-01',
        ],
    ]): PromiseInterface;
}
