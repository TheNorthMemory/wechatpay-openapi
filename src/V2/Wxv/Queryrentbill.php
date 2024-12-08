<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Wxv;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Queryrentbill
{
    /**
     * 查询租借订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/wxv/queryrentbill
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'return_query_id' => '微信侧回跳到商户前端时用于查单的单据查询id.',
            'service_id' => '',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询租借订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/wxv/queryrentbill
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'return_query_id' => '微信侧回跳到商户前端时用于查单的单据查询id.',
            'service_id' => '',
        ],
        'security' => true,
    ]): PromiseInterface;
}
