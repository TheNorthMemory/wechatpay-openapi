<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Applyments\BusinessCode $businessCode
 * @property-read Applyments\ApplymentId $applymentId
 * @property-read Applyments\CancelApplyment $cancelApplyment
 */
interface Applyments
{
    /**
     * 提交入驻申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/applyments
     */
    public function post(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'admin_info' => [
                'admin_name' => 'U2FsdGVkX1+3vZQv5+9JhTq3Xy6LdKjP0o9iYx5W7vRtNqY',
                'id_doc_type' => 'IDENTIFICATION_TYPE_MAINLAND_ID_CARD | IDENTIFICATION_TYPE_HONGKONG | IDENTIFICATION_TYPE_MACAO | IDENTIFICATION_TYPE_TAIWAN',
                'id_card_number' => 'AOZdYGISxo4y44/UgZ69bdu9X+tfMUJ9dl+LetjM45',
            ],
            'subject_info' => [
                'subject_type' => 'SUBJECT_TYPE_ENTERPRISE',
                'subject_name' => 'xx有限公司',
                'unified_social_credit_code' => '91310101MA1FPX1234',
            ],
            'brand_basic_info' => [
                'brand_name' => '爱马哥',
                'brand_logo' => 'U2FsdGVkX1+8n2qLk9jP4vRtY6Wx',
            ],
            'trademark' => [
                'trademark_exists' => 'TRADEMARK_NONE',
                'trademark_registration_certificate' => [
                    'certificate' => 'jTpGmxUX3FBWVQ5NJTZvvDujqhThn4ReFxikqJ5YW6zFQ',
                    'name' => '爱马哥',
                    'number' => '12345678',
                    'valid_begin_time' => '2025-09-08',
                    'valid_end_time' => '2035-09-08',
                    'international_class' => '25',
                    'holder' => '腾讯科技有限公司',
                    'license' => 'jTpGmxUXqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                    'authorization_begin_time' => '2025-09-08',
                    'authorization_end_time' => '2035-09-08',
                ],
                'logo_trademark_registration_certificate' => [
                    'certificate' => 'jTpGmxUXqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                    'name' => '爱马哥',
                    'number' => '21312344',
                    'valid_begin_time' => '2025-09-08',
                    'valid_end_time' => '2035-09-08',
                    'international_class' => '25',
                    'holder' => '腾讯科技有限公司',
                    'license' => 'jTpGmxUXqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                    'authorization_begin_time' => '2025-09-08',
                    'authorization_end_time' => '2035-09-08',
                ],
                'no_trademark_addition_prove' => 'jTpGmxUX3FBWVQ5NJTZvvDujqhThn4ReFxikqJ5YW6zFQ',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 提交入驻申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/applyments
     */
    public function postAsync(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'admin_info' => [
                'admin_name' => 'U2FsdGVkX1+3vZQv5+9JhTq3Xy6LdKjP0o9iYx5W7vRtNqY',
                'id_doc_type' => 'IDENTIFICATION_TYPE_MAINLAND_ID_CARD | IDENTIFICATION_TYPE_HONGKONG | IDENTIFICATION_TYPE_MACAO | IDENTIFICATION_TYPE_TAIWAN',
                'id_card_number' => 'AOZdYGISxo4y44/UgZ69bdu9X+tfMUJ9dl+LetjM45',
            ],
            'subject_info' => [
                'subject_type' => 'SUBJECT_TYPE_ENTERPRISE',
                'subject_name' => 'xx有限公司',
                'unified_social_credit_code' => '91310101MA1FPX1234',
            ],
            'brand_basic_info' => [
                'brand_name' => '爱马哥',
                'brand_logo' => 'U2FsdGVkX1+8n2qLk9jP4vRtY6Wx',
            ],
            'trademark' => [
                'trademark_exists' => 'TRADEMARK_NONE',
                'trademark_registration_certificate' => [
                    'certificate' => 'jTpGmxUX3FBWVQ5NJTZvvDujqhThn4ReFxikqJ5YW6zFQ',
                    'name' => '爱马哥',
                    'number' => '12345678',
                    'valid_begin_time' => '2025-09-08',
                    'valid_end_time' => '2035-09-08',
                    'international_class' => '25',
                    'holder' => '腾讯科技有限公司',
                    'license' => 'jTpGmxUXqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                    'authorization_begin_time' => '2025-09-08',
                    'authorization_end_time' => '2035-09-08',
                ],
                'logo_trademark_registration_certificate' => [
                    'certificate' => 'jTpGmxUXqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                    'name' => '爱马哥',
                    'number' => '21312344',
                    'valid_begin_time' => '2025-09-08',
                    'valid_end_time' => '2035-09-08',
                    'international_class' => '25',
                    'holder' => '腾讯科技有限公司',
                    'license' => 'jTpGmxUXqRTvDujqhThn4ReFxikqJ5YW6zFQ',
                    'authorization_begin_time' => '2025-09-08',
                    'authorization_end_time' => '2035-09-08',
                ],
                'no_trademark_addition_prove' => 'jTpGmxUX3FBWVQ5NJTZvvDujqhThn4ReFxikqJ5YW6zFQ',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
