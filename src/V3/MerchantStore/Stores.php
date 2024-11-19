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
     * @link https://kf.qq.com/faq/2009096ZF7Jf200909UVbY73.html
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'store_basics' => [
                'store_reference_id' => '',
                'brand_name' => '',
                'store_name' => '',
                'branch_name' => '',
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
            'store_recipient' => [[
                'mchid' => '',
                'company_name' => '',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 创建门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://kf.qq.com/faq/2009096ZF7Jf200909UVbY73.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'store_basics' => [
                'store_reference_id' => '',
                'brand_name' => '',
                'store_name' => '',
                'branch_name' => '',
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
            'store_recipient' => [[
                'mchid' => '',
                'company_name' => '',
            ],],
        ],
    ]): PromiseInterface;
}
