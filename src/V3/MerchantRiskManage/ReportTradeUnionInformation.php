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
     * @link https://pay.weixin.qq.com/docs/partner/apis/risk-manage/trade-risk/report-trade-risk-information.html
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
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 上报订单关联信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/risk-manage/trade-risk/report-trade-risk-information.html#async
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
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
