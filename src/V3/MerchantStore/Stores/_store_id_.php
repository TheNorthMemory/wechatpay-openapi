<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantStore\Stores;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _store_id_\Recipients $recipients
 */
interface _store_id_
{
    /**
     * 查询门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-store/stores/%7Bstore_id%7D
     */
    public function get(array $options = [
        'store_id' => '20488000',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-store/stores/%7Bstore_id%7D
     */
    public function getAsync(array $options = [
        'store_id' => '20488000',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;

    /**
     * 修改门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-store/stores/%7Bstore_id%7D#patch
     */
    public function patch(array $options = [
        'store_id' => '20488000',
        'json' => [
            'sub_mchid' => '1900000109',
            'store_basics' => [
                'store_reference_id' => 'MDL001',
                'brand_name' => '麦当劳',
                'store_name' => '麦当劳',
                'branch_name' => '海岸城店',
                'brand_id' => 1001,
            ],
            'store_address' => [
                'address_code' => '440305',
                'address_detail' => '深南大道10000号腾讯大厦1楼',
                'address_complements' => '地铁A口右侧100米',
                'longitude' => '112.63484',
                'latitude' => '37.75464',
            ],
            'store_business' => [
                'service_phone' => '0755-86013388',
                'business_hours' => '周一至周五 09:00-20:00|周六至周日 10:00-22:00',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 修改门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-store/stores/%7Bstore_id%7D#patch
     */
    public function patchAsync(array $options = [
        'store_id' => '20488000',
        'json' => [
            'sub_mchid' => '1900000109',
            'store_basics' => [
                'store_reference_id' => 'MDL001',
                'brand_name' => '麦当劳',
                'store_name' => '麦当劳',
                'branch_name' => '海岸城店',
                'brand_id' => 1001,
            ],
            'store_address' => [
                'address_code' => '440305',
                'address_detail' => '深南大道10000号腾讯大厦1楼',
                'address_complements' => '地铁A口右侧100米',
                'longitude' => '112.63484',
                'latitude' => '37.75464',
            ],
            'store_business' => [
                'service_phone' => '0755-86013388',
                'business_hours' => '周一至周五 09:00-20:00|周六至周日 10:00-22:00',
            ],
        ],
    ]): PromiseInterface;
}
