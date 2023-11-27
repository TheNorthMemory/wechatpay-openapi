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
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-stores/add-representative.html
     */
    public function put(array $options = [
        'activity_id' => '',
        'json' => [
            'representative_info_list' => [[
                'openid' => '',
            ],],
            'out_request_no' => '',
        ],
    ]): ResponseInterface;

    /**
     * 添加零售小店活动业务代理(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-stores/add-representative.html#async
     */
    public function putAsync(array $options = [
        'activity_id' => '',
        'json' => [
            'representative_info_list' => [[
                'openid' => '',
            ],],
            'out_request_no' => '',
        ],
    ]): PromiseInterface;

    /**
     * 删除零售小店活动业务代理(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/delete-representative.html
     */
    public function delete(array $options = [
        'activity_id' => '',
        'json' => [
            'out_request_no' => '1002600620019090123143254436',
            'delete_time' => '2015-05-20T13:29:35+08:00',
            'representative_info_list' => [[
                'openid' => '',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 删除零售小店活动业务代理(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/delete-representative.html#async
     */
    public function deleteAsync(array $options = [
        'activity_id' => '',
        'json' => [
            'out_request_no' => '1002600620019090123143254436',
            'delete_time' => '2015-05-20T13:29:35+08:00',
            'representative_info_list' => [[
                'openid' => '',
            ],],
        ],
    ]): PromiseInterface;
}
