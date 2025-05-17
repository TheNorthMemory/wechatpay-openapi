<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\BankFavor\Users\_openid_\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _coupon_id_
{
    /**
     * 查询绑定多笔立减活动的代金券详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank-favor/users/%7Bopenid%7D/coupons/%7Bcoupon_id%7D
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'coupon_id' => '9856888',
        'query' => [
            'appid' => 'wx57849631bb367f52',
        ],
    ]): ResponseInterface;

    /**
     * 查询绑定多笔立减活动的代金券详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank-favor/users/%7Bopenid%7D/coupons/%7Bcoupon_id%7D
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'coupon_id' => '9856888',
        'query' => [
            'appid' => 'wx57849631bb367f52',
        ],
    ]): PromiseInterface;
}
