<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read FapiaoApplications\_fapiao_apply_id_ $_fapiao_apply_id_
 * @property-read FapiaoApplications\UploadFapiaoFile $uploadFapiaoFile
 */
interface FapiaoApplications
{
    /**
     * 开具电子发票(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'scene' => 'WITH_WECHATPAY',
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
            ],
            'fapiao_information' => [[
                'fapiao_id' => '20200701123456',
                'total_amount' => 382895,
                'need_list' => true,
                'remark' => '备注',
                'items' => [[
                    'tax_code' => '3010101020203000000',
                    'goods_category' => '运输服务',
                    'goods_name' => '出租汽车客运服务',
                    'goods_id' => 1,
                    'specification' => 'A4',
                    'unit' => '次',
                    'quantity' => 100000000,
                    'total_amount' => 429900,
                    'tax_rate' => 1300,
                    'tax_prefer_mark' => 'NO_FAVORABLE',
                    'discount' => true,
                ],],
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 开具电子发票(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'scene' => 'WITH_WECHATPAY',
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
            ],
            'fapiao_information' => [[
                'fapiao_id' => '20200701123456',
                'total_amount' => 382895,
                'need_list' => true,
                'remark' => '备注',
                'items' => [[
                    'tax_code' => '3010101020203000000',
                    'goods_category' => '运输服务',
                    'goods_name' => '出租汽车客运服务',
                    'goods_id' => 1,
                    'specification' => 'A4',
                    'unit' => '次',
                    'quantity' => 100000000,
                    'total_amount' => 429900,
                    'tax_rate' => 1300,
                    'tax_prefer_mark' => 'NO_FAVORABLE',
                    'discount' => true,
                ],],
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
