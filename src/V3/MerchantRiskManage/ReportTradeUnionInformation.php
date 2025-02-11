<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantRiskManage;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ReportTradeUnionInformation
{
    /**
     * 上报订单关联信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-risk-manage/report-trade-union-information
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'acquiring_bank_id' => '1356485',
            'channel_id' => '1900000108',
            'sub_mchid' => '1900009231',
            'out_trade_no' => '1217752501201407033233368018',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'phone' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'certificates_number' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'client_ip' => '123.12.12.123',
            'risk_level' => 1,
            'line_type' => 1,
            'goods_type' => 1,
            'seller_type' => 1,
            'is_need_deliver' => true,
            'device_type' => 1,
            'userid' => '华为的账号：260XXX',
            'phone_from' => 1,
            'seller_userid' => '抖音的账号：XXXXX',
            'scene' => 1,
            'recharge_fields' => [
                'account_type' => 1,
                'account' => 'example_account',
            ],
            'living_expenses_fields' => [
                'acc_no' => '123456',
                'type' => 1,
                'city' => '湖南衡阳',
                'address' => '广东省深圳市南山区海天二路33号',
                'acc_name' => '詹讯',
                'company_name' => '深圳电力',
                'amount' => 500,
            ],
            'extra_fields1' => '{"key1":"value1"}',
            'extra_fields2' => '{"key1":"value1"}',
            'extra_fields3' => '{"key1":"value1"}',
            'high_risk_goods' => 1,
            'same_deviced' => true,
            'reliable_device' => true,
            'delivery_province' => 'example_delivery_province',
            'delivery_city' => 'example_delivery_city',
            'new_address' => true,
            'last_pay_openid' => 'example_last_pay_openid',
            'risky_goods' => 1,
            'offline_delivery_label' => 1,
            'proxy_payment' => true,
            'order_phone_number' => 'example_order_phone_number',
            'user_risk_level' => 1,
            'sp_risk_level' => 1,
            'phone_number_location' => 'example_phone_number_location',
            'goods_category' => 'example_goods_category',
            'pre_opening_behavior' => 'example_pre_opening_behavior',
            'new_store' => true,
            'store_identifier' => 'example_store_identifier',
            'goods_listing_time' => 'example_goods_listing_time',
            'combine_out_trade_no' => 'example_combine_out_trade_no',
            'combine_mchid' => 'example_combine_mchid',
            'sub_orders' => [[
                'out_trade_no' => 'example_out_trade_no',
                'mch_id' => 'example_mch_id',
                'delivery_province' => 'example_delivery_province',
                'delivery_city' => 'example_delivery_city',
                'risky_goods' => 1,
                'user_risk_level' => 1,
                'sp_risk_level' => 1,
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 上报订单关联信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-risk-manage/report-trade-union-information
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'acquiring_bank_id' => '1356485',
            'channel_id' => '1900000108',
            'sub_mchid' => '1900009231',
            'out_trade_no' => '1217752501201407033233368018',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'phone' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'certificates_number' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'client_ip' => '123.12.12.123',
            'risk_level' => 1,
            'line_type' => 1,
            'goods_type' => 1,
            'seller_type' => 1,
            'is_need_deliver' => true,
            'device_type' => 1,
            'userid' => '华为的账号：260XXX',
            'phone_from' => 1,
            'seller_userid' => '抖音的账号：XXXXX',
            'scene' => 1,
            'recharge_fields' => [
                'account_type' => 1,
                'account' => 'example_account',
            ],
            'living_expenses_fields' => [
                'acc_no' => '123456',
                'type' => 1,
                'city' => '湖南衡阳',
                'address' => '广东省深圳市南山区海天二路33号',
                'acc_name' => '詹讯',
                'company_name' => '深圳电力',
                'amount' => 500,
            ],
            'extra_fields1' => '{"key1":"value1"}',
            'extra_fields2' => '{"key1":"value1"}',
            'extra_fields3' => '{"key1":"value1"}',
            'high_risk_goods' => 1,
            'same_deviced' => true,
            'reliable_device' => true,
            'delivery_province' => 'example_delivery_province',
            'delivery_city' => 'example_delivery_city',
            'new_address' => true,
            'last_pay_openid' => 'example_last_pay_openid',
            'risky_goods' => 1,
            'offline_delivery_label' => 1,
            'proxy_payment' => true,
            'order_phone_number' => 'example_order_phone_number',
            'user_risk_level' => 1,
            'sp_risk_level' => 1,
            'phone_number_location' => 'example_phone_number_location',
            'goods_category' => 'example_goods_category',
            'pre_opening_behavior' => 'example_pre_opening_behavior',
            'new_store' => true,
            'store_identifier' => 'example_store_identifier',
            'goods_listing_time' => 'example_goods_listing_time',
            'combine_out_trade_no' => 'example_combine_out_trade_no',
            'combine_mchid' => 'example_combine_mchid',
            'sub_orders' => [[
                'out_trade_no' => 'example_out_trade_no',
                'mch_id' => 'example_mch_id',
                'delivery_province' => 'example_delivery_province',
                'delivery_city' => 'example_delivery_city',
                'risky_goods' => 1,
                'user_risk_level' => 1,
                'sp_risk_level' => 1,
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
