<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Queryexchagerate
{
    /**
     * 汇率查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/queryexchagerate
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'fee_type' => 'USD',
            'date' => '20150807',
        ],
        'nonceless' => true,
    ]): ResponseInterface;

    /**
     * 汇率查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/queryexchagerate
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'fee_type' => 'USD',
            'date' => '20150807',
        ],
        'nonceless' => true,
    ]): PromiseInterface;
}
