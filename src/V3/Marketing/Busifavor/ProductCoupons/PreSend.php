<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\ProductCoupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PreSend
{
    /**
     * 向用户预发放商品券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/product-coupons/pre-send
     */
    public function post(array $options = [
        'json' => [
            'stock_id' => '1000000013001',
            'coupon_code' => '123446565767',
            'appid' => 'wx233544546545989',
            'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
            'send_request_no' => '34657_20250101_123456',
        ],
    ]): ResponseInterface;

    /**
     * 向用户预发放商品券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/product-coupons/pre-send
     */
    public function postAsync(array $options = [
        'json' => [
            'stock_id' => '1000000013001',
            'coupon_code' => '123446565767',
            'appid' => 'wx233544546545989',
            'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
            'send_request_no' => '34657_20250101_123456',
        ],
    ]): PromiseInterface;
}
