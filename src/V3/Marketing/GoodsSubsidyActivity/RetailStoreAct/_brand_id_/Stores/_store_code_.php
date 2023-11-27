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
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/get-store.html
     */
    public function get(array $options = [
        'brand_id' => '1001',
        'store_code' => 'abc_001',
    ]): ResponseInterface;

    /**
     * 查询小店活动门店详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/get-store.html#async
     */
    public function getAsync(array $options = [
        'brand_id' => '1001',
        'store_code' => 'abc_001',
    ]): PromiseInterface;
}
