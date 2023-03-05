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
}
