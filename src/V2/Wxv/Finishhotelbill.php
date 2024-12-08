<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Wxv;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Finishhotelbill
{
    /**
     * 完结速住订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/wxv/finishhotelbill
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '',
            'checked_in' => 'TRUE',
            'real_end_time' => '20091225091010',
            'other_fee' => '10000',
            'cancel_fee' => '10000',
            'compensation_fee' => '6000',
            'compensation_fee_desc' => '打破房间杯子一个',
            'room_rate' => '5000',
            'overdue_fine' => '5000',
            'overdue_fine_desc' => '延迟退房2小时，增加50元房费',
            'total_amount' => '40000',
            'finish_ticket' => '',
            'profit_sharing' => 'Y',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 完结速住订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/wxv/finishhotelbill
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '',
            'checked_in' => 'TRUE',
            'real_end_time' => '20091225091010',
            'other_fee' => '10000',
            'cancel_fee' => '10000',
            'compensation_fee' => '6000',
            'compensation_fee_desc' => '打破房间杯子一个',
            'room_rate' => '5000',
            'overdue_fine' => '5000',
            'overdue_fine_desc' => '延迟退房2小时，增加50元房费',
            'total_amount' => '40000',
            'finish_ticket' => '',
            'profit_sharing' => 'Y',
        ],
        'security' => true,
    ]): PromiseInterface;
}
