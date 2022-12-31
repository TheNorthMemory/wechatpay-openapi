<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4subject;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Applyment\_business_code_ $_business_code_
 * @property-read Applyment\_applyment_id_ $_applyment_id_
 * @property-read Applyment\Merchants $merchants
 */
interface Applyment
{
    /**
     * 提交商户开户意愿申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_1_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'business_code' => '',
            'contact_info' => [
                'contact_type' => 'LEGAL | SUPER',
                'name' => '',
                'contact_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'id_card_number' => '',
                'contact_id_doc_copy' => '',
                'contact_id_doc_copy_back' => '',
                'contact_period_begin' => '',
                'contact_period_end' => '',
                'business_authorization_letter' => '',
                'mobile' => '',
            ],
            'subject_info' => [
                'subject_type' => 'SUBJECT_TYPE_INDIVIDUAL | SUBJECT_TYPE_ENTERPRISE | SUBJECT_TYPE_INSTITUTIONS | SUBJECT_TYPE_OTHERS',
                'is_finance_institution' => true,
                'business_license_info' => [
                    'licence_number' => '',
                    'licence_copy' => '',
                    'merchant_name' => '',
                    'legal_person' => '',
                    'company_address' => '',
                    'licence_valid_date' => '["1970-01-01","forever"]',
                ],
                'certificate_info' => [
                    'cert_type' => 'CERTIFICATE_TYPE_2388 | CERTIFICATE_TYPE_2389 | CERTIFICATE_TYPE_2390 | CERTIFICATE_TYPE_2391',
                    'cert_number' => '',
                    'cert_copy' => '',
                    'merchant_name' => '',
                    'legal_person' => '',
                    'company_address' => '',
                    'cert_valid_date' => '["1970-01-01","forever"]',
                ],
                'company_prove_copy' => '',
                'assist_prove_info' => [
                    'micro_biz_type' => 'MICRO_TYPE_STORE',
                    'store_name' => '',
                    'store_address_code' => '',
                    'store_address' => '',
                    'store_header_copy' => '',
                    'store_indoor_copy' => '',
                ],
                'special_operation_info' => [[
                    'category_id' => 0,
                    'store_indoor_copy' => ['MediaId'],
                ],],
                'finance_institution_info' => [
                    'finance_type' => 'BANK_AGENT | PAYMENT_AGENT | INSURANCE | TRADE_AND_SETTLE',
                    'finance_license_pics' => ['MediaId'],
                ],
            ],
            'identification_info' => [
                'id_holder_type' => 'LEGAL | SUPER',
                'identification_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'authorize_letter_copy' => '',
                'identification_name' => '',
                'identification_number' => '',
                'identification_valid_date' => '["1970-01-01","forever"]',
                'identification_address' => '',
                'identification_front_copy' => '',
                'identification_back_copy' => '',
                'owner' => true,
            ],
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
            'addition_info' => [
                'confirm_mchid_list' => ['string'],
            ],
        ],
        'query' => [
            'channel_id' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 提交商户开户意愿申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_1_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'business_code' => '',
            'contact_info' => [
                'contact_type' => 'LEGAL | SUPER',
                'name' => '',
                'contact_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'id_card_number' => '',
                'contact_id_doc_copy' => '',
                'contact_id_doc_copy_back' => '',
                'contact_period_begin' => '',
                'contact_period_end' => '',
                'business_authorization_letter' => '',
                'mobile' => '',
            ],
            'subject_info' => [
                'subject_type' => 'SUBJECT_TYPE_INDIVIDUAL | SUBJECT_TYPE_ENTERPRISE | SUBJECT_TYPE_INSTITUTIONS | SUBJECT_TYPE_OTHERS',
                'is_finance_institution' => true,
                'business_license_info' => [
                    'licence_number' => '',
                    'licence_copy' => '',
                    'merchant_name' => '',
                    'legal_person' => '',
                    'company_address' => '',
                    'licence_valid_date' => '["1970-01-01","forever"]',
                ],
                'certificate_info' => [
                    'cert_type' => 'CERTIFICATE_TYPE_2388 | CERTIFICATE_TYPE_2389 | CERTIFICATE_TYPE_2390 | CERTIFICATE_TYPE_2391',
                    'cert_number' => '',
                    'cert_copy' => '',
                    'merchant_name' => '',
                    'legal_person' => '',
                    'company_address' => '',
                    'cert_valid_date' => '["1970-01-01","forever"]',
                ],
                'company_prove_copy' => '',
                'assist_prove_info' => [
                    'micro_biz_type' => 'MICRO_TYPE_STORE',
                    'store_name' => '',
                    'store_address_code' => '',
                    'store_address' => '',
                    'store_header_copy' => '',
                    'store_indoor_copy' => '',
                ],
                'special_operation_info' => [[
                    'category_id' => 0,
                    'store_indoor_copy' => ['MediaId'],
                ],],
                'finance_institution_info' => [
                    'finance_type' => 'BANK_AGENT | PAYMENT_AGENT | INSURANCE | TRADE_AND_SETTLE',
                    'finance_license_pics' => ['MediaId'],
                ],
            ],
            'identification_info' => [
                'id_holder_type' => 'LEGAL | SUPER',
                'identification_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'authorize_letter_copy' => '',
                'identification_name' => '',
                'identification_number' => '',
                'identification_valid_date' => '["1970-01-01","forever"]',
                'identification_address' => '',
                'identification_front_copy' => '',
                'identification_back_copy' => '',
                'owner' => true,
            ],
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
            'addition_info' => [
                'confirm_mchid_list' => ['string'],
            ],
        ],
        'query' => [
            'channel_id' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;

    /**
     * 查询商户开户意愿申请单审核结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_1_3.shtml
     */
    public function get(array $options = [
        'query' => [
            'applyment_id' => '',
            'business_code' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询商户开户意愿申请单审核结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_1_3.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'applyment_id' => '',
            'business_code' => '',
        ],
    ]): PromiseInterface;
}
