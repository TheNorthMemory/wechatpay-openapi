<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\BrandBasic\Partner\Brands\_brand_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ProductAuthorities
{
    /**
     * 获得品牌已授权且在生效中的产品权限信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand-basic/partner/brands/%7Bbrand_id%7D/product-authorities
     */
    public function get(array $options = [
        'brand_id' => '123456789',
    ]): ResponseInterface;

    /**
     * 获得品牌已授权且在生效中的产品权限信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand-basic/partner/brands/%7Bbrand_id%7D/product-authorities
     */
    public function getAsync(array $options = [
        'brand_id' => '123456789',
    ]): PromiseInterface;
}
