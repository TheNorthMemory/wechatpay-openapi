<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querycombinedorder
{
    /**
     * 合单查单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/querycombinedorder
     */
    public function post(array $options = [
        'xml' => [
            'combine_appid' => 'wx8888888888888888',
            'combine_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'combine_out_trade_no' => '1217752501201407033233368018',
        ],
    ]): ResponseInterface;

    /**
     * 合单查单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/querycombinedorder
     */
    public function postAsync(array $options = [
        'xml' => [
            'combine_appid' => 'wx8888888888888888',
            'combine_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'combine_out_trade_no' => '1217752501201407033233368018',
        ],
    ]): PromiseInterface;
}
