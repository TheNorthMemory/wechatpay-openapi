<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Bills
{
    /**
     * 申请分账账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_11.shtml
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '',
            'bill_date' => '2019-06-11',
            'tar_type' => 'GZIP',
        ],
    ]): ResponseInterface;

    /**
     * 申请分账账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_11.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '',
            'bill_date' => '2019-06-11',
            'tar_type' => 'GZIP',
        ],
    ]): PromiseInterface;
}
