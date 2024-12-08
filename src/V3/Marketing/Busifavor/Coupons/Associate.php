<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Associate
{
    /**
     * 关联订单信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/associate
     */
    public function post(array $options = [
        'json' => [
            'stock_id' => '',
            'coupon_code' => '',
            'out_trade_no' => '',
            'out_request_no' => '',
        ],
    ]): ResponseInterface;

    /**
     * 关联订单信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/associate
     */
    public function postAsync(array $options = [
        'json' => [
            'stock_id' => '',
            'coupon_code' => '',
            'out_trade_no' => '',
            'out_request_no' => '',
        ],
    ]): PromiseInterface;
}
