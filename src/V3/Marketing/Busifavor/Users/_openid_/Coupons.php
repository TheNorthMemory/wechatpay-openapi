<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Coupons\_coupon_code_ $_coupon_code_
 */
interface Coupons
{
    /**
     * 根据过滤条件查询用户券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/users/%7Bopenid%7D/coupons
     */
    public function get(array $options = [
        'openid' => '2323dfsdf342342',
        'query' => [
            'appid' => 'wx233544546545989',
            'stock_id' => '9865000',
            'coupon_state' => 'SENDED',
            'creator_merchant' => '1000000001',
            'belong_merchant' => '1000000002',
            'sender_merchant' => '1000000003',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 根据过滤条件查询用户券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/users/%7Bopenid%7D/coupons
     */
    public function getAsync(array $options = [
        'openid' => '2323dfsdf342342',
        'query' => [
            'appid' => 'wx233544546545989',
            'stock_id' => '9865000',
            'coupon_state' => 'SENDED',
            'creator_merchant' => '1000000001',
            'belong_merchant' => '1000000002',
            'sender_merchant' => '1000000003',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
