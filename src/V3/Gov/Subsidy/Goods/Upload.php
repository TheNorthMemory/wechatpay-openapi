<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Goods;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Upload
{
    /**
     * 商品信息上传(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/goods/upload
     */
    public function post(array $options = [
        'json' => [
            'appliance_id' => 1,
            'product_name' => '测试商品',
            'energy_grade' => 'FIRST_LEVEL',
            'brand' => '海尔',
            'qualification_region_code' => 310100,
            'seller_name' => '联想（北京）信息技术有限公司',
            'license_number' => '91110108397173806M',
            'base_price' => 10000,
            'average_trading_price' => 10000,
            'product_type' => 'COMMON_PRODUCT',
            'product_model' => 'XX',
            'bar_code' => '6901010101098',
        ],
    ]): ResponseInterface;

    /**
     * 商品信息上传(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/goods/upload
     */
    public function postAsync(array $options = [
        'json' => [
            'appliance_id' => 1,
            'product_name' => '测试商品',
            'energy_grade' => 'FIRST_LEVEL',
            'brand' => '海尔',
            'qualification_region_code' => 310100,
            'seller_name' => '联想（北京）信息技术有限公司',
            'license_number' => '91110108397173806M',
            'base_price' => 10000,
            'average_trading_price' => 10000,
            'product_type' => 'COMMON_PRODUCT',
            'product_model' => 'XX',
            'bar_code' => '6901010101098',
        ],
    ]): PromiseInterface;
}
