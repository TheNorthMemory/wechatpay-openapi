<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantStore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Stores\_store_id_ $_store_id_
 */
interface Stores
{
    /**
     * 创建门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-store/stores
     */
    public function post(array $options = [
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
            'store_recipient' => [[
                'mchid' => '1230000109',
                'company_name' => '腾讯科技（深圳）有限公司',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 创建门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-store/stores
     */
    public function postAsync(array $options = [
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
            'store_recipient' => [[
                'mchid' => '1230000109',
                'company_name' => '腾讯科技（深圳）有限公司',
            ],],
        ],
    ]): PromiseInterface;
}
