<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Users\_openid_\Coupons\_coupon_code_\Appids;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _appid_
{
    /**
     * 查询用户单张券详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/users/%7Bopenid%7D/coupons/%7Bcoupon_code%7D/appids/%7Bappid%7D
     */
    public function get(array $options = [
        'coupon_code' => '',
        'appid' => '',
        'openid' => '',
    ]): ResponseInterface;

    /**
     * 查询用户单张券详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/users/%7Bopenid%7D/coupons/%7Bcoupon_code%7D/appids/%7Bappid%7D
     */
    public function getAsync(array $options = [
        'coupon_code' => '',
        'appid' => '',
        'openid' => '',
    ]): PromiseInterface;
}
