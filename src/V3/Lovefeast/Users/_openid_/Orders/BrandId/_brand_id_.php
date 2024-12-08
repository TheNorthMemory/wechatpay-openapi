<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Lovefeast\Users\_openid_\Orders\BrandId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _brand_id_
{
    /**
     * 查询用户捐赠单列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/lovefeast/users/%7Bopenid%7D/orders/brand-id/%7Bbrand_id%7D
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'brand_id' => '2250',
        'query' => [
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询用户捐赠单列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/lovefeast/users/%7Bopenid%7D/orders/brand-id/%7Bbrand_id%7D
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'brand_id' => '2250',
        'query' => [
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
