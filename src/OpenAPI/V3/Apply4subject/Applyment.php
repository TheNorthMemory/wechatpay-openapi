<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4subject;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Applyment\_business_code_ $_business_code_
 * @property-read Applyment\_applyment_id_ $_applyment_id_
 * @property-read Applyment\Merchants $merchants
 */
interface Applyment
{
    /**
     * 提交商户开户意愿申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/applysubject/chapter5_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'business_code' => '',
            'contact_info' => [
                'name' => '',
                'mobile' => '',
                'id_card_number' => '',
            ],
            'subject_info' => [
                'subject_type' => '',
                'business_license_info' => [
                    'licence_number' => '',
                    'licence_copy' => '',
                    'merchant_name' => '',
                    'legal_person' => '',
                    'company_address' => '',
                    'licence_valid_date' => '["1970-01-01","forever"]',
                ],
                'certificate_info' => [
                    'cert_type' => '',
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
                    'store_indoor_copy' => ['MediaId'],
                ],],
            ],
            'identification_info' => [
                'identification_type' => '',
                'identification_name' => '',
                'identification_number' => '',
                'identification_valid_date' => '["1970-01-01","forever"]',
                'identification_front_copy' => '',
                'identification_back_copy' => '',
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/applysubject/chapter5_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'business_code' => '',
            'contact_info' => [
                'name' => '',
                'mobile' => '',
                'id_card_number' => '',
            ],
            'subject_info' => [
                'subject_type' => '',
                'business_license_info' => [
                    'licence_number' => '',
                    'licence_copy' => '',
                    'merchant_name' => '',
                    'legal_person' => '',
                    'company_address' => '',
                    'licence_valid_date' => '["1970-01-01","forever"]',
                ],
                'certificate_info' => [
                    'cert_type' => '',
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
                    'store_indoor_copy' => ['MediaId'],
                ],],
            ],
            'identification_info' => [
                'identification_type' => '',
                'identification_name' => '',
                'identification_number' => '',
                'identification_valid_date' => '["1970-01-01","forever"]',
                'identification_front_copy' => '',
                'identification_back_copy' => '',
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/applysubject/chapter5_3.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/applysubject/chapter5_3.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'applyment_id' => '',
            'business_code' => '',
        ],
    ]): PromiseInterface;
}
