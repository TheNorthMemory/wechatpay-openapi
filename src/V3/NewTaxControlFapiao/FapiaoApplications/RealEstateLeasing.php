<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\FapiaoApplications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface RealEstateLeasing
{
    /**
     * 开具不动产租赁行业电子发票(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/real-estate-leasing
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'fapiao_apply_id' => '4200000444201910177461284488',
            'buyer_information' => [
                'type' => 'INDIVIDUAL',
                'name' => '深圳市南山区测试企业',
                'taxpayer_id' => '202003261233701778',
                'address' => '深圳市南山区深南大道10000号',
                'telephone' => '075512345678',
                'bank_name' => '测试银行',
                'bank_account' => '62001234567890',
                'phone' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPttdY+aQ6zB',
                'email' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPttdY+aQ6zB',
                'amount' => 1000,
                'out_trade_no' => 'order_20200701_123456',
                'fapiao_bill_type' => 'COMM_FAPIAO',
                'user_apply_message' => '用户留言',
            ],
            'fapiao_information' => [
                'fapiao_id' => '20200701123456',
                'total_amount' => 382895,
                'items' => [[
                    'tax_code' => '3010101020203000000',
                    'goods_name' => '出租汽车客运服务',
                    'specification' => 'A4',
                    'unit' => '次',
                    'quantity' => 100000000,
                    'total_amount' => 429900,
                    'tax_rate' => 1300,
                    'discount' => true,
                    'preferential_policy_code' => 1,
                    'real_estate_leasing_information' => [
                        'province' => '重庆市',
                        'city' => '涪陵区',
                        'address' => 'xx街道xx小区',
                        'lease_period_start' => '2025-01-01T10:00:00+08:00',
                        'lease_period_end' => '2025-07-01T10:00:00+08:00',
                        'cross_city_flag' => true,
                        'certificate_no' => 'OVgc/slzCvzSebaz46sUA4tJmm5GbN',
                        'plate_no' => ['渝A12345'],
                    ],
                ],],
                'export_business_policy_code' => 1,
                'vat_refund_levy_code' => 1,
                'billing_person_id' => '128279891283',
                'billing_person' => 'example_billing_person',
                'fapiao_bill_type' => 'COMM_FAPIAO',
                'transaction_information' => [[
                    'pay_channel' => 'WECHAT_PAY',
                    'transaction_id' => '4200000008202508080512076713',
                    'out_trade_no' => 'order_20200701_123456',
                    'amount' => 382895,
                ],],
                'remark' => '备注',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 开具不动产租赁行业电子发票(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/real-estate-leasing
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'fapiao_apply_id' => '4200000444201910177461284488',
            'buyer_information' => [
                'type' => 'INDIVIDUAL',
                'name' => '深圳市南山区测试企业',
                'taxpayer_id' => '202003261233701778',
                'address' => '深圳市南山区深南大道10000号',
                'telephone' => '075512345678',
                'bank_name' => '测试银行',
                'bank_account' => '62001234567890',
                'phone' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPttdY+aQ6zB',
                'email' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPttdY+aQ6zB',
                'amount' => 1000,
                'out_trade_no' => 'order_20200701_123456',
                'fapiao_bill_type' => 'COMM_FAPIAO',
                'user_apply_message' => '用户留言',
            ],
            'fapiao_information' => [
                'fapiao_id' => '20200701123456',
                'total_amount' => 382895,
                'items' => [[
                    'tax_code' => '3010101020203000000',
                    'goods_name' => '出租汽车客运服务',
                    'specification' => 'A4',
                    'unit' => '次',
                    'quantity' => 100000000,
                    'total_amount' => 429900,
                    'tax_rate' => 1300,
                    'discount' => true,
                    'preferential_policy_code' => 1,
                    'real_estate_leasing_information' => [
                        'province' => '重庆市',
                        'city' => '涪陵区',
                        'address' => 'xx街道xx小区',
                        'lease_period_start' => '2025-01-01T10:00:00+08:00',
                        'lease_period_end' => '2025-07-01T10:00:00+08:00',
                        'cross_city_flag' => true,
                        'certificate_no' => 'OVgc/slzCvzSebaz46sUA4tJmm5GbN',
                        'plate_no' => ['渝A12345'],
                    ],
                ],],
                'export_business_policy_code' => 1,
                'vat_refund_levy_code' => 1,
                'billing_person_id' => '128279891283',
                'billing_person' => 'example_billing_person',
                'fapiao_bill_type' => 'COMM_FAPIAO',
                'transaction_information' => [[
                    'pay_channel' => 'WECHAT_PAY',
                    'transaction_id' => '4200000008202508080512076713',
                    'out_trade_no' => 'order_20200701_123456',
                    'amount' => 382895,
                ],],
                'remark' => '备注',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
