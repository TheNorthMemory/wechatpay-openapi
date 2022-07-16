<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Fundflowbill
{
    /**
     * 申请资金账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_9_2.shtml
     */
    public function get(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'sub_mchid' => '',
            'account_type' => 'BASIC',
            'tar_type' => 'GZIP',
        ],
    ]): ResponseInterface;

    /**
     * 申请资金账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_9_2.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'bill_date' => '2019-06-11',
            'sub_mchid' => '',
            'account_type' => 'BASIC',
            'tar_type' => 'GZIP',
        ],
    ]): PromiseInterface;
}
