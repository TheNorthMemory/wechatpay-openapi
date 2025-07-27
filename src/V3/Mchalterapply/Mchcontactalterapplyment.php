<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Mchcontactalterapplyment\_apply_id_ $_apply_id_
 * @property-read Mchcontactalterapplyment\Merchant $merchant
 */
interface Mchcontactalterapplyment
{
    /**
     * 提交超管变更申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/mchcontactalterapplyment
     */
    public function post(array $options = [
        'json' => [
            'merchant_code' => '2492185251',
            'out_request_no' => '1900013511_10000',
            'contact_info' => [
                'contact_name' => 'pVd1HJ6zyvPedzGaV+X3IdGdbDnuC4Eelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'contact_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                'contact_id_card_number' => 'pVd1HJ6zmty7/mYNxLMpRSvMRtelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'contact_id_doc_copy' => '',
                'contact_id_doc_copy_back' => '',
                'contact_period_begin' => '',
                'contact_period_end' => '',
                'business_authorization_letter' => '',
                'mobile_phone' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+F6mfjbzQIzfb3HHLEjZ4YiNWWNeespQO/0kjiwfqdfg==',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 提交超管变更申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/mchcontactalterapplyment
     */
    public function postAsync(array $options = [
        'json' => [
            'merchant_code' => '2492185251',
            'out_request_no' => '1900013511_10000',
            'contact_info' => [
                'contact_name' => 'pVd1HJ6zyvPedzGaV+X3IdGdbDnuC4Eelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'contact_id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                'contact_id_card_number' => 'pVd1HJ6zmty7/mYNxLMpRSvMRtelw/wDa4SzfeespQO/0kjiwfqdfg==',
                'contact_id_doc_copy' => '',
                'contact_id_doc_copy_back' => '',
                'contact_period_begin' => '',
                'contact_period_end' => '',
                'business_authorization_letter' => '',
                'mobile_phone' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tPROvwia4ibL+F6mfjbzQIzfb3HHLEjZ4YiNWWNeespQO/0kjiwfqdfg==',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
