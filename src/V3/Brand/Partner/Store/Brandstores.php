<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\Store;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Brandstores\_store_id_ $_store_id_
 */
interface Brandstores
{
    /**
     * 创建品牌门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores
     */
    public function post(array $options = [
        'json' => [
            'brand_id' => '123456789',
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
     * 创建品牌门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_id' => '123456789',
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
     * 列表查询品牌门店信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores#get
     */
    public function get(array $options = [
        'query' => [
            'brand_id' => '120344',
            'store_state' => 'OPEN',
            'offset' => 100,
            'limit' => 50,
        ],
    ]): ResponseInterface;

    /**
     * 列表查询品牌门店信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores#get
     */
    public function getAsync(array $options = [
        'query' => [
            'brand_id' => '120344',
            'store_state' => 'OPEN',
            'offset' => 100,
            'limit' => 50,
        ],
    ]): PromiseInterface;
}
