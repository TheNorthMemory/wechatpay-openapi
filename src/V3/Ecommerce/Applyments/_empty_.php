<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Applyments;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _empty_
{
    /**
     * 二级商户进件(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_1_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => '',
            'organization_type' => '2401 | 2500 | 4 | 2',
            'finance_institution' => true,
            'business_license_info' => [
                'cert_type' => 'CERTIFICATE_TYPE_2388 | CERTIFICATE_TYPE_2389 | CERTIFICATE_TYPE_2390 | CERTIFICATE_TYPE_2391',
                'business_license_copy' => '47ZC6GC-vnrbEny__Ie_An5-tCpqxucuxi-vByf3Gjm7KE53JXvGy9tqZm2XAUf-4KGprrKhpVBDIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'business_license_number' => '123456789012345678',
                'merchant_name' => '腾讯科技有限公司',
                'legal_person' => '张三',
                'company_address' => '深圳南山区科苑路',
                'business_time' => '["2014-01-01","长期"]',
            ],
            'finance_institution_info' => [
                'finance_type' => 'BANK_AGENT | PAYMENT_AGENT | INSURANCE | TRADE_AND_SETTLE',
                'finance_license_pics' => ['MediaId'],
            ],
            'id_holder_type' => 'LEGAL | SUPER',
            'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
            'authorize_letter_copy' => '',
            'id_card_info' => [
                'id_card_copy' => 'xpnFuAxhBTEO_PvWkfSCJ3zVIn001D8daLC-ehEuo0BJqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                'id_card_national' => 'vByf3Gjm7KE53JXvGy9tqZm2XAUf-4KGprrKhpVBDIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'id_card_name' => 'pVd1HJ6v/69bDnuC4EL5Kz4jBHLiCa8MRtelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'id_card_number' => 'zV+BEmytMNQCqQ8juwEc4P4TG5xzchG/5IL9DBd+Z0zZXkw==4',
                'id_card_address' => '',
                'id_card_valid_time_begin' => '',
                'id_card_valid_time' => '',
            ],
            'id_doc_info' => [
                'id_doc_name' => 'jTpGmxUX3FBWVQ5NJTZvlKX_gdU4LC-ehEuo0BJqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                'id_doc_number' => 'jTpGmxUX3FBWVQ5NJTZvlKX_go0BJqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                'id_doc_address' => '',
                'id_doc_copy' => 'xi-vByf3Gjm7KE53JXvGy9tqZm2XAUf-4KGprrKhpVBDIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'id_doc_copy_back' => 'xi-vByf3Gjm7KE53JXvGy9tqZm2XAUf-4KGprrKhpVBDIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'doc_period_begin' => '2020-01-02',
                'doc_period_end' => '2020-01-02',
            ],
            'owner' => true,
            'ubo_info_list' => [[
                'ubo_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'ubo_id_doc_copy' => '',
                'ubo_id_doc_copy_back' => '',
                'ubo_id_doc_name' => '',
                'ubo_id_doc_number' => '',
                'ubo_id_doc_address' => '',
                'ubo_period_begin' => '',
                'ubo_period_end' => '',
            ],],
            'account_info' => [
                'bank_account_type' => '75',
                'account_bank' => '工商银行',
                'account_name' => 'AOZdYGISxo4yw96uY1Pk7Rq79Jtt7+I8juwEc4P4TG5xzchG/5IL9DBd+Z0zZXkw==',
                'bank_address_code' => '110000',
                'bank_branch_id' => '402713354941',
                'bank_name' => '施秉县农村信用合作联社城关信用社',
                'account_number' => 'd+xT+MQCvrLHUVDWv/8MR/dB7TkXLVfSrUxMPZy6jWWYzpRrEEaYQE8ZRGYoeorwC+w==',
                'account_cert_info' => [
                    'settlement_cert_pic' => '',
                    'relation_cert_pic' => '',
                    'other_cert_pics' => ['MediaId'],
                ],
            ],
            'contact_info' => [
                'contact_type' => '65',
                'contact_name' => 'pVd1HJ6zyvPedzGaV+X3IdGdbDnuC4Eelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'contact_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'contact_id_card_number' => 'pVd1HJ6zmty7/mYNxLMpRSvMRtelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'contact_id_doc_copy' => '',
                'contact_id_doc_copy_back' => '',
                'contact_period_begin' => '',
                'contact_period_end' => '',
                'business_authorization_letter' => '',
                'mobile_phone' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+F6mfjbzQIzfb3HHLEjZ4YiNWWNeespQO/0kjiwfqdfg==',
                'contact_email' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+FWWNUlw/wDa4SzfeespQO/0kjiwfqdfg==',
            ],
            'sales_scene_info' => [
                'store_name' => '爱烧烤',
                'store_url' => 'http://www.qq.com',
                'store_qr_code' => '',
                'mini_program_sub_appid' => '',
            ],
            'settlement_info' => [
                'settlement_id' => '',
                'qualification_type' => '',
            ],
            'merchant_shortname' => '',
            'qualifications' => ['MediaId'],
            'business_addition_pics' => ['MediaId'],
            'business_addition_desc' => ['MediaId'],
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 二级商户进件(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_1_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => '',
            'organization_type' => '2401 | 2500 | 4 | 2',
            'finance_institution' => true,
            'business_license_info' => [
                'cert_type' => 'CERTIFICATE_TYPE_2388 | CERTIFICATE_TYPE_2389 | CERTIFICATE_TYPE_2390 | CERTIFICATE_TYPE_2391',
                'business_license_copy' => '47ZC6GC-vnrbEny__Ie_An5-tCpqxucuxi-vByf3Gjm7KE53JXvGy9tqZm2XAUf-4KGprrKhpVBDIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'business_license_number' => '123456789012345678',
                'merchant_name' => '腾讯科技有限公司',
                'legal_person' => '张三',
                'company_address' => '深圳南山区科苑路',
                'business_time' => '["2014-01-01","长期"]',
            ],
            'finance_institution_info' => [
                'finance_type' => 'BANK_AGENT | PAYMENT_AGENT | INSURANCE | TRADE_AND_SETTLE',
                'finance_license_pics' => ['MediaId'],
            ],
            'id_holder_type' => 'LEGAL | SUPER',
            'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
            'authorize_letter_copy' => '',
            'id_card_info' => [
                'id_card_copy' => 'xpnFuAxhBTEO_PvWkfSCJ3zVIn001D8daLC-ehEuo0BJqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                'id_card_national' => 'vByf3Gjm7KE53JXvGy9tqZm2XAUf-4KGprrKhpVBDIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'id_card_name' => 'pVd1HJ6v/69bDnuC4EL5Kz4jBHLiCa8MRtelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'id_card_number' => 'zV+BEmytMNQCqQ8juwEc4P4TG5xzchG/5IL9DBd+Z0zZXkw==4',
                'id_card_address' => '',
                'id_card_valid_time_begin' => '',
                'id_card_valid_time' => '',
            ],
            'id_doc_info' => [
                'id_doc_name' => 'jTpGmxUX3FBWVQ5NJTZvlKX_gdU4LC-ehEuo0BJqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                'id_doc_number' => 'jTpGmxUX3FBWVQ5NJTZvlKX_go0BJqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                'id_doc_address' => '',
                'id_doc_copy' => 'xi-vByf3Gjm7KE53JXvGy9tqZm2XAUf-4KGprrKhpVBDIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'id_doc_copy_back' => 'xi-vByf3Gjm7KE53JXvGy9tqZm2XAUf-4KGprrKhpVBDIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'doc_period_begin' => '2020-01-02',
                'doc_period_end' => '2020-01-02',
            ],
            'owner' => true,
            'ubo_info_list' => [[
                'ubo_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'ubo_id_doc_copy' => '',
                'ubo_id_doc_copy_back' => '',
                'ubo_id_doc_name' => '',
                'ubo_id_doc_number' => '',
                'ubo_id_doc_address' => '',
                'ubo_period_begin' => '',
                'ubo_period_end' => '',
            ],],
            'account_info' => [
                'bank_account_type' => '75',
                'account_bank' => '工商银行',
                'account_name' => 'AOZdYGISxo4yw96uY1Pk7Rq79Jtt7+I8juwEc4P4TG5xzchG/5IL9DBd+Z0zZXkw==',
                'bank_address_code' => '110000',
                'bank_branch_id' => '402713354941',
                'bank_name' => '施秉县农村信用合作联社城关信用社',
                'account_number' => 'd+xT+MQCvrLHUVDWv/8MR/dB7TkXLVfSrUxMPZy6jWWYzpRrEEaYQE8ZRGYoeorwC+w==',
                'account_cert_info' => [
                    'settlement_cert_pic' => '',
                    'relation_cert_pic' => '',
                    'other_cert_pics' => ['MediaId'],
                ],
            ],
            'contact_info' => [
                'contact_type' => '65',
                'contact_name' => 'pVd1HJ6zyvPedzGaV+X3IdGdbDnuC4Eelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'contact_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'contact_id_card_number' => 'pVd1HJ6zmty7/mYNxLMpRSvMRtelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'contact_id_doc_copy' => '',
                'contact_id_doc_copy_back' => '',
                'contact_period_begin' => '',
                'contact_period_end' => '',
                'business_authorization_letter' => '',
                'mobile_phone' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+F6mfjbzQIzfb3HHLEjZ4YiNWWNeespQO/0kjiwfqdfg==',
                'contact_email' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+FWWNUlw/wDa4SzfeespQO/0kjiwfqdfg==',
            ],
            'sales_scene_info' => [
                'store_name' => '爱烧烤',
                'store_url' => 'http://www.qq.com',
                'store_qr_code' => '',
                'mini_program_sub_appid' => '',
            ],
            'settlement_info' => [
                'settlement_id' => '',
                'qualification_type' => '',
            ],
            'merchant_shortname' => '',
            'qualifications' => ['MediaId'],
            'business_addition_pics' => ['MediaId'],
            'business_addition_desc' => ['MediaId'],
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
