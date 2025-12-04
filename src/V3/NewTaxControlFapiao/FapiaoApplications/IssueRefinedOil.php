<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\FapiaoApplications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface IssueRefinedOil
{
    /**
     * 开具成品油行业电子发票(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/issue-refined-oil
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'fapiao_apply_id' => '4200000444201910177461284488',
            'buyer_information' => [
                'type' => 'ORGANIZATION',
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
                    'unit' => 'TON',
                    'quantity' => 100000000,
                    'total_amount' => 429900,
                    'tax_rate' => 1300,
                    'discount' => true,
                    'preferential_policy_code' => 1,
                    'refined_oil_information' => [
                        'station' => '中国石油(江北红旗河沟加油站)',
                        'trade_time' => '2025-07-01T00:00:00+08:00',
                        'gun_number' => '1号枪',
                    ],
                ],],
                'export_business_policy_code' => 1,
                'vat_refund_levy_code' => 1,
                'billing_person_id' => '187776276864872',
                'billing_person' => '**伟 0020',
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
     * 开具成品油行业电子发票(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/issue-refined-oil
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'fapiao_apply_id' => '4200000444201910177461284488',
            'buyer_information' => [
                'type' => 'ORGANIZATION',
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
                    'unit' => 'TON',
                    'quantity' => 100000000,
                    'total_amount' => 429900,
                    'tax_rate' => 1300,
                    'discount' => true,
                    'preferential_policy_code' => 1,
                    'refined_oil_information' => [
                        'station' => '中国石油(江北红旗河沟加油站)',
                        'trade_time' => '2025-07-01T00:00:00+08:00',
                        'gun_number' => '1号枪',
                    ],
                ],],
                'export_business_policy_code' => 1,
                'vat_refund_levy_code' => 1,
                'billing_person_id' => '187776276864872',
                'billing_person' => '**伟 0020',
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
