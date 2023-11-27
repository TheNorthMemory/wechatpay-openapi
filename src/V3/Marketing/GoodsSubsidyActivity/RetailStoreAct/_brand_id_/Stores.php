<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\GoodsSubsidyActivity\RetailStoreAct\_brand_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Stores\_store_code_ $_store_code_
 */
interface Stores
{
    /**
     * 添加小店活动门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/add-stores.html
     */
    public function post(array $options = [
        'brand_id' => '1001',
        'json' => [
            'out_request_no' => '1002600620019090123143254436',
            'add_time' => '2015-05-20T13:29:35+08:00',
            'stores' => [[
                'store_code' => 'abc_001',
                'store_name' => '幸福小店',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 添加小店活动门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/add-stores.html#async
     */
    public function postAsync(array $options = [
        'brand_id' => '1001',
        'json' => [
            'out_request_no' => '1002600620019090123143254436',
            'add_time' => '2015-05-20T13:29:35+08:00',
            'stores' => [[
                'store_code' => 'abc_001',
                'store_name' => '幸福小店',
            ],],
        ],
    ]): PromiseInterface;

    /**
     * 删除小店活动门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/delete-stores.html
     */
    public function delete(array $options = [
        'brand_id' => '1001',
        'json' => [
            'out_request_no' => '1002600620019090123143254436',
            'delete_time' => '2015-05-20T13:29:35+08:00',
            'stores' => [[
                'store_code' => 'abc_001',
                'store_name' => '幸福小店',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 删除小店活动门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/delete-stores.html#async
     */
    public function deleteAsync(array $options = [
        'brand_id' => '1001',
        'json' => [
            'out_request_no' => '1002600620019090123143254436',
            'delete_time' => '2015-05-20T13:29:35+08:00',
            'stores' => [[
                'store_code' => 'abc_001',
                'store_name' => '幸福小店',
            ],],
        ],
    ]): PromiseInterface;

    /**
     * 查询小店活动门店列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/list-store.html
     */
    public function get(array $options = [
        'brand_id' => '1001',
        'query' => [
            'offset' => 0,
            'limit' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询小店活动门店列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/list-store.html#async
     */
    public function getAsync(array $options = [
        'brand_id' => '1001',
        'query' => [
            'offset' => 0,
            'limit' => 10,
        ],
    ]): PromiseInterface;
}
