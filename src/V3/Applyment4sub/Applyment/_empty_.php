<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Applyment4sub\Applyment;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _empty_
{
    /**
     * 提交申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/applyment4sub/applyment/
     */
    public function post(array $options = [
        'json' => [
            'business_code' => '',
            'contact_info' => [
                'contact_type' => 'LEGAL | SUPER',
                'contact_name' => '',
                'contact_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'contact_id_number' => '',
                'contact_id_doc_copy' => '',
                'contact_id_doc_copy_back' => '',
                'contact_period_begin' => '',
                'contact_period_end' => '',
                'business_authorization_letter' => '',
                'openid' => '',
                'mobile_phone' => '',
                'contact_email' => '',
            ],
            'subject_info' => [
                'subject_type' => 'SUBJECT_TYPE_INDIVIDUAL | SUBJECT_TYPE_ENTERPRISE | SUBJECT_TYPE_INSTITUTIONS | SUBJECT_TYPE_OTHERS',
                'finance_institution' => true,
                'micro_biz_info' => [
                    'micro_biz_type' => 'MICRO_TYPE_STORE | MICRO_TYPE_MOBILE | MICRO_TYPE_ONLINE',
                    'micro_store_info' => [
                        'micro_name' => '',
                        'micro_address_code' => '',
                        'micro_address' => '',
                        'store_entrance_pic' => '',
                        'micro_indoor_copy' => '',
                        'store_longitude' => '',
                        'store_latitude' => '',
                    ],
                    'micro_mobile_info' => [
                        'micro_mobile_name' => '',
                        'micro_mobile_city' => '',
                        'micro_mobile_address' => '',
                        'micro_mobile_pics' => ['MediaId'],
                    ],
                    'micro_online_info' => [
                        'micro_online_store' => '',
                        'micro_ec_name' => '',
                        'micro_qrcode' => '',
                        'micro_link' => '',
                    ],
                ],
                'business_license_info' => [
                    'license_copy' => '',
                    'license_number' => '',
                    'merchant_name' => '',
                    'legal_person' => '',
                    'license_address' => '',
                    'period_begin' => '',
                    'period_end' => '',
                ],
                'certificate_info' => [
                    'cert_copy' => '',
                    'cert_type' => 'CERTIFICATE_TYPE_2388 | CERTIFICATE_TYPE_2389 | CERTIFICATE_TYPE_2390 | CERTIFICATE_TYPE_2391',
                    'cert_number' => '',
                    'merchant_name' => '',
                    'company_address' => '',
                    'legal_person' => '',
                    'period_begin' => '',
                    'period_end' => '',
                ],
                'organization_info' => [
                    'organization_copy' => '',
                    'organization_code' => '',
                    'org_period_begin' => '',
                    'org_period_end' => '',
                ],
                'certificate_letter_copy' => '',
                'finance_institution_info' => [
                    'finance_type' => 'BANK_AGENT | PAYMENT_AGENT | INSURANCE | TRADE_AND_SETTLE',
                    'finance_license_pics' => ['MediaId'],
                ],
                'identity_info' => [
                    'id_holder_type' => 'LEGAL | SUPER',
                    'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                    'authorize_letter_copy' => '',
                    'id_card_info' => [
                        'id_card_copy' => '',
                        'id_card_national' => '',
                        'id_card_name' => '',
                        'id_card_number' => '',
                        'id_card_address' => '',
                        'card_period_begin' => '',
                        'card_period_end' => '',
                    ],
                    'id_doc_info' => [
                        'id_doc_copy' => '',
                        'id_doc_copy_back' => '',
                        'id_doc_name' => '',
                        'id_doc_number' => '',
                        'id_doc_address' => '',
                        'doc_period_begin' => '',
                        'doc_period_end' => '',
                    ],
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
            ],
            'business_info' => [
                'merchant_shortname' => '',
                'service_phone' => '',
                'sales_info' => [
                    'sales_scenes_type' => ['SALES_SCENES_STORE'],
                    'biz_store_info' => [
                        'biz_store_name' => '',
                        'biz_address_code' => '',
                        'biz_store_address' => '',
                        'store_entrance_pic' => ['MediaId'],
                        'indoor_pic' => ['MediaId'],
                        'biz_sub_appid' => '',
                    ],
                    'mp_info' => [
                        'mp_appid' => '',
                        'mp_sub_appid' => '',
                        'mp_pics' => ['MediaId'],
                    ],
                    'mini_program_info' => [
                        'mini_program_appid' => '',
                        'mini_program_sub_appid' => '',
                        'mini_program_pics' => ['MediaId'],
                    ],
                    'app_info' => [
                        'app_appid' => '',
                        'app_sub_appid' => '',
                        'app_pics' => ['MediaId'],
                    ],
                    'web_info' => [
                        'domain' => '',
                        'web_authorisation' => '',
                        'web_appid' => '',
                    ],
                    'wework_info' => [
                        'sub_corp_id' => '',
                        'wework_pics' => ['MediaId'],
                    ],
                ],
            ],
            'settlement_info' => [
                'settlement_id' => '',
                'qualification_type' => '',
                'qualifications' => ['MediaId'],
                'activities_id' => '',
                'activities_rate' => '',
                'debit_activities_rate' => '',
                'credit_activities_rate' => '',
                'activities_additions' => ['MediaId'],
            ],
            'bank_account_info' => [
                'bank_account_type' => 'BANK_ACCOUNT_TYPE_CORPORATE | BANK_ACCOUNT_TYPE_PERSONAL',
                'account_name' => '',
                'account_bank' => '工商银行',
                'bank_address_code' => '',
                'bank_name' => '施秉县农村信用合作联社城关信用社',
                'bank_branch_id' => '402713354941',
                'account_number' => 'ciphertext',
            ],
            'addition_info' => [
                'legal_person_commitment' => '',
                'legal_person_video' => '',
                'business_addition_pics' => ['MediaId'],
                'business_addition_msg' => '',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 提交申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/applyment4sub/applyment/
     */
    public function postAsync(array $options = [
        'json' => [
            'business_code' => '',
            'contact_info' => [
                'contact_type' => 'LEGAL | SUPER',
                'contact_name' => '',
                'contact_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                'contact_id_number' => '',
                'contact_id_doc_copy' => '',
                'contact_id_doc_copy_back' => '',
                'contact_period_begin' => '',
                'contact_period_end' => '',
                'business_authorization_letter' => '',
                'openid' => '',
                'mobile_phone' => '',
                'contact_email' => '',
            ],
            'subject_info' => [
                'subject_type' => 'SUBJECT_TYPE_INDIVIDUAL | SUBJECT_TYPE_ENTERPRISE | SUBJECT_TYPE_INSTITUTIONS | SUBJECT_TYPE_OTHERS',
                'finance_institution' => true,
                'micro_biz_info' => [
                    'micro_biz_type' => 'MICRO_TYPE_STORE | MICRO_TYPE_MOBILE | MICRO_TYPE_ONLINE',
                    'micro_store_info' => [
                        'micro_name' => '',
                        'micro_address_code' => '',
                        'micro_address' => '',
                        'store_entrance_pic' => '',
                        'micro_indoor_copy' => '',
                        'store_longitude' => '',
                        'store_latitude' => '',
                    ],
                    'micro_mobile_info' => [
                        'micro_mobile_name' => '',
                        'micro_mobile_city' => '',
                        'micro_mobile_address' => '',
                        'micro_mobile_pics' => ['MediaId'],
                    ],
                    'micro_online_info' => [
                        'micro_online_store' => '',
                        'micro_ec_name' => '',
                        'micro_qrcode' => '',
                        'micro_link' => '',
                    ],
                ],
                'business_license_info' => [
                    'license_copy' => '',
                    'license_number' => '',
                    'merchant_name' => '',
                    'legal_person' => '',
                    'license_address' => '',
                    'period_begin' => '',
                    'period_end' => '',
                ],
                'certificate_info' => [
                    'cert_copy' => '',
                    'cert_type' => 'CERTIFICATE_TYPE_2388 | CERTIFICATE_TYPE_2389 | CERTIFICATE_TYPE_2390 | CERTIFICATE_TYPE_2391',
                    'cert_number' => '',
                    'merchant_name' => '',
                    'company_address' => '',
                    'legal_person' => '',
                    'period_begin' => '',
                    'period_end' => '',
                ],
                'organization_info' => [
                    'organization_copy' => '',
                    'organization_code' => '',
                    'org_period_begin' => '',
                    'org_period_end' => '',
                ],
                'certificate_letter_copy' => '',
                'finance_institution_info' => [
                    'finance_type' => 'BANK_AGENT | PAYMENT_AGENT | INSURANCE | TRADE_AND_SETTLE',
                    'finance_license_pics' => ['MediaId'],
                ],
                'identity_info' => [
                    'id_holder_type' => 'LEGAL | SUPER',
                    'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD | IDENTIFICATION_TYPE_OVERSEA_PASSPORT | IDENTIFICATION_TYPE_HONGKONG_PASSPORT | IDENTIFICATION_TYPE_MACAO_PASSPORT',
                    'authorize_letter_copy' => '',
                    'id_card_info' => [
                        'id_card_copy' => '',
                        'id_card_national' => '',
                        'id_card_name' => '',
                        'id_card_number' => '',
                        'id_card_address' => '',
                        'card_period_begin' => '',
                        'card_period_end' => '',
                    ],
                    'id_doc_info' => [
                        'id_doc_copy' => '',
                        'id_doc_copy_back' => '',
                        'id_doc_name' => '',
                        'id_doc_number' => '',
                        'id_doc_address' => '',
                        'doc_period_begin' => '',
                        'doc_period_end' => '',
                    ],
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
            ],
            'business_info' => [
                'merchant_shortname' => '',
                'service_phone' => '',
                'sales_info' => [
                    'sales_scenes_type' => ['SALES_SCENES_STORE'],
                    'biz_store_info' => [
                        'biz_store_name' => '',
                        'biz_address_code' => '',
                        'biz_store_address' => '',
                        'store_entrance_pic' => ['MediaId'],
                        'indoor_pic' => ['MediaId'],
                        'biz_sub_appid' => '',
                    ],
                    'mp_info' => [
                        'mp_appid' => '',
                        'mp_sub_appid' => '',
                        'mp_pics' => ['MediaId'],
                    ],
                    'mini_program_info' => [
                        'mini_program_appid' => '',
                        'mini_program_sub_appid' => '',
                        'mini_program_pics' => ['MediaId'],
                    ],
                    'app_info' => [
                        'app_appid' => '',
                        'app_sub_appid' => '',
                        'app_pics' => ['MediaId'],
                    ],
                    'web_info' => [
                        'domain' => '',
                        'web_authorisation' => '',
                        'web_appid' => '',
                    ],
                    'wework_info' => [
                        'sub_corp_id' => '',
                        'wework_pics' => ['MediaId'],
                    ],
                ],
            ],
            'settlement_info' => [
                'settlement_id' => '',
                'qualification_type' => '',
                'qualifications' => ['MediaId'],
                'activities_id' => '',
                'activities_rate' => '',
                'debit_activities_rate' => '',
                'credit_activities_rate' => '',
                'activities_additions' => ['MediaId'],
            ],
            'bank_account_info' => [
                'bank_account_type' => 'BANK_ACCOUNT_TYPE_CORPORATE | BANK_ACCOUNT_TYPE_PERSONAL',
                'account_name' => '',
                'account_bank' => '工商银行',
                'bank_address_code' => '',
                'bank_name' => '施秉县农村信用合作联社城关信用社',
                'bank_branch_id' => '402713354941',
                'account_number' => 'ciphertext',
            ],
            'addition_info' => [
                'legal_person_commitment' => '',
                'legal_person_video' => '',
                'business_addition_pics' => ['MediaId'],
                'business_addition_msg' => '',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
