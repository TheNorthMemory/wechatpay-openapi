<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantStore\Stores;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _store_id_
{
    /**
     * 查询门店(同步模式)
     * @param array<string,mixed> $options
     */
    public function get(array $options = [
        'store_id' => '',
        'query' => [
            'sub_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询门店(异步模式)
     * @param array<string,mixed> $options
     * @link #async
     */
    public function getAsync(array $options = [
        'store_id' => '',
        'query' => [
            'sub_mchid' => '',
        ],
    ]): PromiseInterface;

    /**
     * 修改门店(同步模式)
     * @param array<string,mixed> $options
     */
    public function patch(array $options = [
        'store_id' => '',
        'json' => [
            'sub_mchid' => '1900000109',
            'store_basics' => [
                'store_reference_id' => '',
                'brand_name' => '',
                'store_name' => '',
                'store_business' => '',
            ],
            'store_address' => [
                'address_code' => '440305',
                'address_detail' => '',
                'address_complements' => '',
                'longitude' => '',
                'latitude' => '',
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
     * @link #async
     */
    public function patchAsync(array $options = [
        'store_id' => '',
        'json' => [
            'sub_mchid' => '1900000109',
            'store_basics' => [
                'store_reference_id' => '',
                'brand_name' => '',
                'store_name' => '',
                'store_business' => '',
            ],
            'store_address' => [
                'address_code' => '440305',
                'address_detail' => '',
                'address_complements' => '',
                'longitude' => '',
                'latitude' => '',
            ],
            'store_business' => [
                'service_phone' => '0755-86013388',
                'business_hours' => '周一至周五 09:00-20:00|周六至周日 10:00-22:00',
            ],
        ],
    ]): PromiseInterface;
}
