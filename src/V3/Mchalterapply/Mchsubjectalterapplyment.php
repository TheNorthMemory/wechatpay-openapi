<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Mchsubjectalterapplyment\_apply_id_ $_apply_id_
 * @property-read Mchsubjectalterapplyment\Merchant $merchant
 */
interface Mchsubjectalterapplyment
{
    /**
     * 提交资料变更申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'merchant_code' => '2492185251',
            'out_request_no' => '1900013511_10000',
            'organization_type' => 'SUBJECT_TYPE_ENTERPRISE',
            'finance_institution' => true,
            'business_license_info' => [
                'license_number' => '123456789012345678',
                'license_copy' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'merchant_name' => '李四网络有限公司',
                'legal_person' => '李四',
                'company_address' => '广东省深圳市南山区xx路xx号',
                'license_period_begin' => '2019-06-06',
                'license_period_end' => '2026-06-06',
            ],
            'certificate_info' => [
                'cert_type' => 'CERTIFICATE_TYPE_2388',
                'cert_number' => '111111111111',
                'cert_copy' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'merchant_name' => 'xx公益团体',
                'legal_person' => '李四',
                'company_address' => '广东省深圳市南山区xx路xx号',
                'cert_period_begin' => '2019-06-06',
                'cert_period_end' => '2026-06-06',
            ],
            'finance_institution_info' => [
                'finance_type' => 'FINANCE_TYPE_BANK_AGENT',
                'finance_license_pics' => ['MediaId'],
            ],
            'legal_person_info' => [
                'id_holder_type' => 'LEGAL',
                'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                'authorize_letter_copy' => '47ZC6GC-vnrbEny_Ie_An5-tCpqxucuxi-vByf3Gjm7KEIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'card_front' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'card_back' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'card_name' => 'MZnwEx6zotwIz6ctW2/iQL5z94odwP9sKiF74RPCPztcJOScaXsaGs82HJNU3K+46ndk7pMrENiPDw==',
                'card_number' => 'MZnwEx6zotwIz6ctW2/iQL5z94odwP9sKiF74RPCPztcJOScaXsaGs82HJNU3K+46ndk7pMrENiPDw==',
                'card_address' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+F6mfjbzQIzfb3HHLEjZ4YiR/cJiCrZxnAqi+pjeKIEdkwzXRAI7FUhrfPK3SNjaBTEu9GmsugMIA9r3x887Q+ODuC8HH2nzAn7NGpE/e3yiHgWhk0ps5k5DP/2qIdGdONoDzZelrxCl/NWWNUyB93K9F+jC1JX2IMttdY+aQ6zBlw0xnOiNW6Hzy7UtC+xriudjD5APomty7/mYNxLMpRSvWKIjOv/69bDnuC4EL5Kz4jBHLiCyOb+tI0m2qhZ9evAM+Jv1z0NVa8MRtelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'card_period_begin' => '2019-06-06',
                'card_period_end' => '2026-06-06',
                'as_ubo' => true,
            ],
            'ubo_info_list' => [[
                'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                'card_front' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'card_back' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'card_name' => 'MZnwEx6zotwIz6ctW2/iQL5z94odwP9sKiF74RPCPztcJOScaXsaGs82HJNU3K+46ndk7pMrENiPDw==',
                'card_number' => 'MZnwEx6zotwIz6ctW2/iQL5z94odwP9sKiF74RPCPztcJOScaXsaGs82HJNU3K+46ndk7pMrENiPDw==',
                'card_address' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+F6mfjbzQIzfb3HHLEjZ4YiR/cJiCrZxnAqi+==',
                'card_period_begin' => '2019-06-06',
                'card_period_end' => '2026-06-06',
            ],],
            'addition' => [
                'bank_openaccount_license' => ['MediaId'],
                'openaccount_approval' => ['MediaId'],
                'legal_other_prove' => ['MediaId'],
                'agency_prove' => ['MediaId'],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 提交资料变更申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'merchant_code' => '2492185251',
            'out_request_no' => '1900013511_10000',
            'organization_type' => 'SUBJECT_TYPE_ENTERPRISE',
            'finance_institution' => true,
            'business_license_info' => [
                'license_number' => '123456789012345678',
                'license_copy' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'merchant_name' => '李四网络有限公司',
                'legal_person' => '李四',
                'company_address' => '广东省深圳市南山区xx路xx号',
                'license_period_begin' => '2019-06-06',
                'license_period_end' => '2026-06-06',
            ],
            'certificate_info' => [
                'cert_type' => 'CERTIFICATE_TYPE_2388',
                'cert_number' => '111111111111',
                'cert_copy' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'merchant_name' => 'xx公益团体',
                'legal_person' => '李四',
                'company_address' => '广东省深圳市南山区xx路xx号',
                'cert_period_begin' => '2019-06-06',
                'cert_period_end' => '2026-06-06',
            ],
            'finance_institution_info' => [
                'finance_type' => 'FINANCE_TYPE_BANK_AGENT',
                'finance_license_pics' => ['MediaId'],
            ],
            'legal_person_info' => [
                'id_holder_type' => 'LEGAL',
                'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                'authorize_letter_copy' => '47ZC6GC-vnrbEny_Ie_An5-tCpqxucuxi-vByf3Gjm7KEIUv0OF4wFNIO4kqg05InE4d2I6_H7I4',
                'card_front' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'card_back' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'card_name' => 'MZnwEx6zotwIz6ctW2/iQL5z94odwP9sKiF74RPCPztcJOScaXsaGs82HJNU3K+46ndk7pMrENiPDw==',
                'card_number' => 'MZnwEx6zotwIz6ctW2/iQL5z94odwP9sKiF74RPCPztcJOScaXsaGs82HJNU3K+46ndk7pMrENiPDw==',
                'card_address' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+F6mfjbzQIzfb3HHLEjZ4YiR/cJiCrZxnAqi+pjeKIEdkwzXRAI7FUhrfPK3SNjaBTEu9GmsugMIA9r3x887Q+ODuC8HH2nzAn7NGpE/e3yiHgWhk0ps5k5DP/2qIdGdONoDzZelrxCl/NWWNUyB93K9F+jC1JX2IMttdY+aQ6zBlw0xnOiNW6Hzy7UtC+xriudjD5APomty7/mYNxLMpRSvWKIjOv/69bDnuC4EL5Kz4jBHLiCyOb+tI0m2qhZ9evAM+Jv1z0NVa8MRtelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'card_period_begin' => '2019-06-06',
                'card_period_end' => '2026-06-06',
                'as_ubo' => true,
            ],
            'ubo_info_list' => [[
                'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                'card_front' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'card_back' => '0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjmVtCz7ScmhEIThCaV-4BBgVwtNkCHO_XXqK5dE5YdOmFJBZR9FwczhJehHhAZN6BKXQPcs-VvdSo',
                'card_name' => 'MZnwEx6zotwIz6ctW2/iQL5z94odwP9sKiF74RPCPztcJOScaXsaGs82HJNU3K+46ndk7pMrENiPDw==',
                'card_number' => 'MZnwEx6zotwIz6ctW2/iQL5z94odwP9sKiF74RPCPztcJOScaXsaGs82HJNU3K+46ndk7pMrENiPDw==',
                'card_address' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+F6mfjbzQIzfb3HHLEjZ4YiR/cJiCrZxnAqi+==',
                'card_period_begin' => '2019-06-06',
                'card_period_end' => '2026-06-06',
            ],],
            'addition' => [
                'bank_openaccount_license' => ['MediaId'],
                'openaccount_approval' => ['MediaId'],
                'legal_other_prove' => ['MediaId'],
                'agency_prove' => ['MediaId'],
            ],
        ],
    ]): PromiseInterface;
}