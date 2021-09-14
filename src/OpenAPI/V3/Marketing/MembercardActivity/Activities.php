<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardActivity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Activities\_activity_id_ $_activity_id_
 */
interface Activities
{
    /**
     * 创建活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter8_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'card_id' => '',
            'activity_name' => '',
            'activity_type' => '',
            'begin_time' => '',
            'end_time' => '',
            'award_send_period' => [],
            'stock_list' => [],
            'out_request_no' => '',
            'pay_activity_setting' => [],
        ],
    ]): ResponseInterface;

    /**
     * 创建活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter8_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'card_id' => '',
            'activity_name' => '',
            'activity_type' => '',
            'begin_time' => '',
            'end_time' => '',
            'award_send_period' => [],
            'stock_list' => [],
            'out_request_no' => '',
            'pay_activity_setting' => [],
        ],
    ]): PromiseInterface;

    /**
     * 查询活动列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter8_3.shtml
     */
    public function get(array $options = [
        'query' => [
            'limit' => 0,
            'offset' => 0,
            'activity_type' => '',
            'card_id' => '',
            'activity_status' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询活动列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter8_3.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 0,
            'offset' => 0,
            'activity_type' => '',
            'card_id' => '',
            'activity_status' => '',
        ],
    ]): PromiseInterface;
}
