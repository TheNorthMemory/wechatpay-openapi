<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Sncode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Lock
{
    /**
     * sn码锁定(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/sncode/lock
     */
    public function post(array $options = [
        'json' => [
            'appliance_id' => 1,
            'out_trade_no' => 'vmall_250120131959_993_4494',
            'brand' => '海尔',
            'qualification_region_code' => 310100,
            'sn_code' => 'fallervuh',
            'manufacturer_info' => '',
            'barcode' => '6901010101098',
            'spec_model' => 'YOGA Air 15s ILL9',
            'product_type' => 'COMMON_PRODUCT',
            'sale_time' => '2025-01-14T19:55:06+08:00',
            'imei1' => '358882046176540',
            'imei2' => '358882046176540',
        ],
    ]): ResponseInterface;

    /**
     * sn码锁定(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/sncode/lock
     */
    public function postAsync(array $options = [
        'json' => [
            'appliance_id' => 1,
            'out_trade_no' => 'vmall_250120131959_993_4494',
            'brand' => '海尔',
            'qualification_region_code' => 310100,
            'sn_code' => 'fallervuh',
            'manufacturer_info' => '',
            'barcode' => '6901010101098',
            'spec_model' => 'YOGA Air 15s ILL9',
            'product_type' => 'COMMON_PRODUCT',
            'sale_time' => '2025-01-14T19:55:06+08:00',
            'imei1' => '358882046176540',
            'imei2' => '358882046176540',
        ],
    ]): PromiseInterface;
}
