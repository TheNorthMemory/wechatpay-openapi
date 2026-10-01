<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Transit;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Queryorder
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/transit/queryorder
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'transaction_id' => '1009660380201506130728806387',
            'sign_type' => 'HMAC-SHA256',
            'contract_id' => 'Wx15463511252015071056489715',
            'version' => '2.0',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/transit/queryorder
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'transaction_id' => '1009660380201506130728806387',
            'sign_type' => 'HMAC-SHA256',
            'contract_id' => 'Wx15463511252015071056489715',
            'version' => '2.0',
        ],
    ]): PromiseInterface;
}
