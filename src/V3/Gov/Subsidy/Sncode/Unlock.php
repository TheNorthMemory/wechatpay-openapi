<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Sncode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Unlock
{
    /**
     * sn码解锁(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/sncode/unlock
     */
    public function post(array $options = [
        'json' => [
            'appliance_id' => 1,
            'out_trade_no' => 'vmall_250120131959_993_4494',
            'qualification_region_code' => 310100,
            'sn_code' => 'fallervuh',
            'barcode' => '6901010101098',
            'product_type' => 'COMMON_PRODUCT',
        ],
    ]): ResponseInterface;

    /**
     * sn码解锁(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/sncode/unlock
     */
    public function postAsync(array $options = [
        'json' => [
            'appliance_id' => 1,
            'out_trade_no' => 'vmall_250120131959_993_4494',
            'qualification_region_code' => 310100,
            'sn_code' => 'fallervuh',
            'barcode' => '6901010101098',
            'product_type' => 'COMMON_PRODUCT',
        ],
    ]): PromiseInterface;
}
