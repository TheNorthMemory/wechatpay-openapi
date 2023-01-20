<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Wxv;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Createhotelbill
{
    /**
     * 创建速住订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/payscore.php?chapter=19_1&index=2
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '',
            'room' => '几木双床房2间',
            'start_time' => '20091225091010',
            'end_time' => '20091225091010',
            'service_location' => '北京亦庄亚朵酒店',
            'deposit_amount' => '80000',
            'room_rate' => '20000',
            'room_rate_desc' => '共住3晚，每晚100元',
            'attach' => '',
            'cancel_rule' => '',
            'cancel_rule_desc' => '',
            'cert_serial_no' => '45233302',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'name' => '',
            'phone' => '',
            'userid' => '',
            'address' => '',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 创建速住订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/payscore.php?chapter=19_1&index=2#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '',
            'room' => '几木双床房2间',
            'start_time' => '20091225091010',
            'end_time' => '20091225091010',
            'service_location' => '北京亦庄亚朵酒店',
            'deposit_amount' => '80000',
            'room_rate' => '20000',
            'room_rate_desc' => '共住3晚，每晚100元',
            'attach' => '',
            'cancel_rule' => '',
            'cancel_rule_desc' => '',
            'cert_serial_no' => '45233302',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'name' => '',
            'phone' => '',
            'userid' => '',
            'address' => '',
        ],
        'security' => true,
    ]): PromiseInterface;
}
