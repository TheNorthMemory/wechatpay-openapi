<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\IndustryRebate\RetailIndustry;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Transactions
{
    /**
     * 回传SN和商品编码(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/industry-rebate/retail-industry/transactions
     */
    public function post(array $options = [
        'json' => [
            'brand_id' => '120344',
            'transaction_id' => '20190611222222222200000000012122',
            'out_trade_no' => 'example_out_trade_no',
            'sub_mchid' => '1900000001',
            'device_id' => 'example_device_id',
            'goods_detail' => [[
                'barcode' => 'example_barcode',
                'merchant_goods_id' => '1001',
                'goods_name' => 'iPhoneX 256G',
                'quantity' => 1,
                'price' => 528800,
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 回传SN和商品编码(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/industry-rebate/retail-industry/transactions
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_id' => '120344',
            'transaction_id' => '20190611222222222200000000012122',
            'out_trade_no' => 'example_out_trade_no',
            'sub_mchid' => '1900000001',
            'device_id' => 'example_device_id',
            'goods_detail' => [[
                'barcode' => 'example_barcode',
                'merchant_goods_id' => '1001',
                'goods_name' => 'iPhoneX 256G',
                'quantity' => 1,
                'price' => 528800,
            ],],
        ],
    ]): PromiseInterface;
}
