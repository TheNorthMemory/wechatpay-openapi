<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\Store\Brandstores;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _store_id_\Bindrecipient $bindrecipient
 * @property-read _store_id_\Close $close
 * @property-read _store_id_\Resume $resume
 * @property-read _store_id_\Unbindrecipient $unbindrecipient
 */
interface _store_id_
{
    /**
     * 删除品牌门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D
     */
    public function delete(array $options = [
        'store_id' => '20488000',
        'json' => [
            'brand_id' => '123456789',
        ],
    ]): ResponseInterface;

    /**
     * 删除品牌门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D
     */
    public function deleteAsync(array $options = [
        'store_id' => '20488000',
        'json' => [
            'brand_id' => '123456789',
        ],
    ]): PromiseInterface;

    /**
     * 更新品牌门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D#patch
     */
    public function patch(array $options = [
        'store_id' => '20488000',
        'json' => [
            'store_basics' => [
                'store_reference_id' => 'MDL001',
                'branch_name' => '海岸城店',
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
     * 更新品牌门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D#patch
     */
    public function patchAsync(array $options = [
        'store_id' => '20488000',
        'json' => [
            'store_basics' => [
                'store_reference_id' => 'MDL001',
                'branch_name' => '海岸城店',
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

    /**
     * 查询品牌门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D#get
     */
    public function get(array $options = [
        'store_id' => '20488000',
        'query' => [
            'brand_id' => '123456789',
        ],
    ]): ResponseInterface;

    /**
     * 查询品牌门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D#get
     */
    public function getAsync(array $options = [
        'store_id' => '20488000',
        'query' => [
            'brand_id' => '123456789',
        ],
    ]): PromiseInterface;
}
