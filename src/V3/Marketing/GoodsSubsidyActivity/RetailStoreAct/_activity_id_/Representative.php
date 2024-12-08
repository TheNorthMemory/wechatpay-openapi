<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\GoodsSubsidyActivity\RetailStoreAct\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Representative
{
    /**
     * 添加零售小店活动业务代理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/retail-store-act/%7Bactivity_id%7D/representative
     */
    public function put(array $options = [
        'activity_id' => '3118550000000004',
        'json' => [
            'representative_info_list' => [[
                'openid' => 'oK7fFt8zzEZ909XH-LE2#',
            ],],
            'out_request_no' => '1002600620019090123143254436',
            'add_time' => '2015-05-20T13:29:35+08:00',
        ],
    ]): ResponseInterface;

    /**
     * 添加零售小店活动业务代理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/retail-store-act/%7Bactivity_id%7D/representative
     */
    public function putAsync(array $options = [
        'activity_id' => '3118550000000004',
        'json' => [
            'representative_info_list' => [[
                'openid' => 'oK7fFt8zzEZ909XH-LE2#',
            ],],
            'out_request_no' => '1002600620019090123143254436',
            'add_time' => '2015-05-20T13:29:35+08:00',
        ],
    ]): PromiseInterface;

    /**
     * 删除零售小店活动业务代理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/retail-store-act/%7Bactivity_id%7D/representative#delete
     */
    public function delete(array $options = [
        'activity_id' => '3118550000000004',
        'json' => [
            'representative_info_list' => [[
                'openid' => 'oK7fFt8zzEZ909XH-LE2#',
            ],],
            'out_request_no' => '1002600620019090123143254436',
            'delete_time' => '2015-05-20T13:29:35.120+08:00',
        ],
    ]): ResponseInterface;

    /**
     * 删除零售小店活动业务代理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/retail-store-act/%7Bactivity_id%7D/representative#delete
     */
    public function deleteAsync(array $options = [
        'activity_id' => '3118550000000004',
        'json' => [
            'representative_info_list' => [[
                'openid' => 'oK7fFt8zzEZ909XH-LE2#',
            ],],
            'out_request_no' => '1002600620019090123143254436',
            'delete_time' => '2015-05-20T13:29:35.120+08:00',
        ],
    ]): PromiseInterface;
}
