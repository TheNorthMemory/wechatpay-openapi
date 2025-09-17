<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\FapiaoApplications\_fapiao_apply_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface InsertCards
{
    /**
     * 将电子发票插入微信用户卡包(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/%7Bfapiao_apply_id%7D/insert-cards
     */
    public function post(array $options = [
        'fapiao_apply_id' => '4200000444201910177461284488',
        'json' => [
            'sub_mchid' => '1900000109',
            'scene' => 'WITH_WECHATPAY',
            'buyer_information' => [
                'type' => 'ORGANIZATION',
                'name' => '深圳市南山区测试企业',
                'taxpayer_id' => '202003261233701778',
                'address' => '深圳市南山区深南大道10000号',
                'telephone' => '075512345678',
                'bank_name' => '测试银行',
                'bank_account' => '62001234567890',
                'phone' => '18507550000',
                'email' => '123110@qq.com',
                'amount' => 1000,
                'out_trade_no' => 'order_20200701_123456',
                'fapiao_bill_type' => 'COMM_FAPIAO',
                'user_apply_message' => '用户留言',
            ],
            'fapiao_card_information' => [[
                'fapiao_media_id' => 'ASNFZ4mrze/+3LqYdlQyEA==',
                'fapiao_number' => '12897794',
                'fapiao_code' => '044001911211',
                'fapiao_time' => '2020-07-01T12:00:00+08:00',
                'check_code' => '69001808340631374774',
                'password' => '006>299-375/326>2+7/*0-+<3510',
                'total_amount' => 382895,
                'tax_amount' => 44050,
                'amount' => 338845,
                'seller_information' => [
                    'name' => '深圳市南山区测试公司',
                    'taxpayer_id' => '202003261233701778',
                    'address' => '深圳市南山区深南大道10000号',
                    'telephone' => '075512345678',
                    'bank_name' => '测试银行',
                    'bank_account' => '62001234567890',
                ],
                'extra_information' => [
                    'payee' => '张三',
                    'reviewer' => '李四',
                    'drawer' => '王五',
                ],
                'items' => [[
                    'tax_code' => '3010101020203000000',
                    'goods_name' => '出租汽车客运服务',
                    'specification' => 'A4',
                    'unit' => '次',
                    'quantity' => 100000000,
                    'unit_price' => 380442000000,
                    'amount' => 380442,
                    'tax_amount' => 49458,
                    'total_amount' => 429900,
                    'tax_rate' => 1300,
                    'tax_prefer_mark' => 'NO_FAVORABLE',
                    'discount' => true,
                ],],
                'remark' => '备注',
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 将电子发票插入微信用户卡包(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/%7Bfapiao_apply_id%7D/insert-cards
     */
    public function postAsync(array $options = [
        'fapiao_apply_id' => '4200000444201910177461284488',
        'json' => [
            'sub_mchid' => '1900000109',
            'scene' => 'WITH_WECHATPAY',
            'buyer_information' => [
                'type' => 'ORGANIZATION',
                'name' => '深圳市南山区测试企业',
                'taxpayer_id' => '202003261233701778',
                'address' => '深圳市南山区深南大道10000号',
                'telephone' => '075512345678',
                'bank_name' => '测试银行',
                'bank_account' => '62001234567890',
                'phone' => '18507550000',
                'email' => '123110@qq.com',
                'amount' => 1000,
                'out_trade_no' => 'order_20200701_123456',
                'fapiao_bill_type' => 'COMM_FAPIAO',
                'user_apply_message' => '用户留言',
            ],
            'fapiao_card_information' => [[
                'fapiao_media_id' => 'ASNFZ4mrze/+3LqYdlQyEA==',
                'fapiao_number' => '12897794',
                'fapiao_code' => '044001911211',
                'fapiao_time' => '2020-07-01T12:00:00+08:00',
                'check_code' => '69001808340631374774',
                'password' => '006>299-375/326>2+7/*0-+<3510',
                'total_amount' => 382895,
                'tax_amount' => 44050,
                'amount' => 338845,
                'seller_information' => [
                    'name' => '深圳市南山区测试公司',
                    'taxpayer_id' => '202003261233701778',
                    'address' => '深圳市南山区深南大道10000号',
                    'telephone' => '075512345678',
                    'bank_name' => '测试银行',
                    'bank_account' => '62001234567890',
                ],
                'extra_information' => [
                    'payee' => '张三',
                    'reviewer' => '李四',
                    'drawer' => '王五',
                ],
                'items' => [[
                    'tax_code' => '3010101020203000000',
                    'goods_name' => '出租汽车客运服务',
                    'specification' => 'A4',
                    'unit' => '次',
                    'quantity' => 100000000,
                    'unit_price' => 380442000000,
                    'amount' => 380442,
                    'tax_amount' => 49458,
                    'total_amount' => 429900,
                    'tax_rate' => 1300,
                    'tax_prefer_mark' => 'NO_FAVORABLE',
                    'discount' => true,
                ],],
                'remark' => '备注',
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
