<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\GoodsSubsidyActivity\RetailStoreAct\_brand_id_\Stores;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _store_code_
{
    /**
     * 查询小店活动门店详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/retail-store-act/%7Bbrand_id%7D/stores/%7Bstore_code%7D
     */
    public function get(array $options = [
        'brand_id' => '1001',
        'store_code' => 'abc_001',
    ]): ResponseInterface;

    /**
     * 查询小店活动门店详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/retail-store-act/%7Bbrand_id%7D/stores/%7Bstore_code%7D
     */
    public function getAsync(array $options = [
        'brand_id' => '1001',
        'store_code' => 'abc_001',
    ]): PromiseInterface;
}
