<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Coupons\_coupon_id_ $_coupon_id_
 */
interface Coupons
{
    /**
     * 发放代金券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/users/%7Bopenid%7D/coupons
     */
    public function post(array $options = [
        'openid' => '',
        'json' => [
            'stock_id' => '9856000',
            'out_request_no' => '89560002019101000121',
            'appid' => 'wx233544546545989',
            'stock_creator_mchid' => '8956000',
            'coupon_value' => 100,
            'coupon_minimum' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 发放代金券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/users/%7Bopenid%7D/coupons
     */
    public function postAsync(array $options = [
        'openid' => '',
        'json' => [
            'stock_id' => '9856000',
            'out_request_no' => '89560002019101000121',
            'appid' => 'wx233544546545989',
            'stock_creator_mchid' => '8956000',
            'coupon_value' => 100,
            'coupon_minimum' => 100,
        ],
    ]): PromiseInterface;

    /**
     * 根据商户号查用户的券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/users/%7Bopenid%7D/coupons#get
     */
    public function get(array $options = [
        'openid' => '',
        'query' => [
            'appid' => '',
            'stock_id' => '',
            'status' => 'SENDED | USED',
            'creator_mchid' => '',
            'sender_mchid' => '',
            'available_mchid' => '',
            'offset' => 0,
            'limit' => 20,
            'business_type' => 'MULTIUSE',
        ],
    ]): ResponseInterface;

    /**
     * 根据商户号查用户的券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/users/%7Bopenid%7D/coupons#get
     */
    public function getAsync(array $options = [
        'openid' => '',
        'query' => [
            'appid' => '',
            'stock_id' => '',
            'status' => 'SENDED | USED',
            'creator_mchid' => '',
            'sender_mchid' => '',
            'available_mchid' => '',
            'offset' => 0,
            'limit' => 20,
            'business_type' => 'MULTIUSE',
        ],
    ]): PromiseInterface;
}
