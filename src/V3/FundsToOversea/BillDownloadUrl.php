<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundsToOversea;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface BillDownloadUrl
{
    /**
     * 获取购付汇账单文件下载链接(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_10_4.shtml
     */
    public function get(array $options = [
        'query' => [
            'bill_date' => '2021-01-01',
            'sub_mchid' => '19000000001',
        ],
    ]): ResponseInterface;

    /**
     * 获取购付汇账单文件下载链接(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_10_4.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'bill_date' => '2021-01-01',
            'sub_mchid' => '19000000001',
        ],
    ]): PromiseInterface;
}
