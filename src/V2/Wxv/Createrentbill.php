<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Wxv;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Createrentbill
{
    /**
     * 创建租借订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/wxv/createrentbill
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '',
            'goods_name' => '充电宝一个',
            'start_time' => '20091225091010',
            'end_time' => '20091225091010',
            'service_location' => '嗨客时尚主题展餐厅',
            'deposit_amount' => '0',
            'rent_unit' => 'FEN_1_HOUR',
            'rent_unit_fee' => '8000',
            'rent_fee_desc' => '租金前1小时免费，每日封顶10元。',
            'attach' => '',
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
     * 创建租借订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/wxv/createrentbill
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '',
            'goods_name' => '充电宝一个',
            'start_time' => '20091225091010',
            'end_time' => '20091225091010',
            'service_location' => '嗨客时尚主题展餐厅',
            'deposit_amount' => '0',
            'rent_unit' => 'FEN_1_HOUR',
            'rent_unit_fee' => '8000',
            'rent_fee_desc' => '租金前1小时免费，每日封顶10元。',
            'attach' => '',
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
