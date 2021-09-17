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
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_name' => '良品铺子回馈活动',
            'activity_type' => 'NON_MEMBER_AFTERPAY',
            'begin_time' => '2020-01-20T13:29:35.120+08:00',
            'end_time' => '2020-01-29T13:29:35.120+08:00',
            'award_send_period' => [],
            'stock_list' => [],
            'out_request_no' => '100002322019090134234sfdf',
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
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_name' => '良品铺子回馈活动',
            'activity_type' => 'NON_MEMBER_AFTERPAY',
            'begin_time' => '2020-01-20T13:29:35.120+08:00',
            'end_time' => '2020-01-29T13:29:35.120+08:00',
            'award_send_period' => [],
            'stock_list' => [],
            'out_request_no' => '100002322019090134234sfdf',
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
