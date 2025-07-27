<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\ProductCoupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Send
{
    /**
     * 向用户发放商品券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/product-coupons/send
     */
    public function post(array $options = [
        'json' => [
            'openid' => 'xsd3434454567676',
            'appid' => 'wx1234567889999',
            'stock_id' => '12312354',
            'out_request_no' => '2335465',
            'coupon_code' => '202007019999',
            'coupon_type' => 'NORMAL',
            'member_card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        ],
    ]): ResponseInterface;

    /**
     * 向用户发放商品券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/product-coupons/send
     */
    public function postAsync(array $options = [
        'json' => [
            'openid' => 'xsd3434454567676',
            'appid' => 'wx1234567889999',
            'stock_id' => '12312354',
            'out_request_no' => '2335465',
            'coupon_code' => '202007019999',
            'coupon_type' => 'NORMAL',
            'member_card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        ],
    ]): PromiseInterface;
}
