<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Inspolicymgr\Deduct;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Policies\_out_insurance_no_ $_out_insurance_no_
 */
interface Policies
{
    /**
     * 上传保单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies
     */
    public function post(array $options = [
        'json' => [
            'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
            'insured_name_list' => ['tCk1JSUV2QUlCQURBTkJna3Foa2lHOXc'],
            'insurance_company_code' => '1001',
            'effective_time' => '2025-09-21T17:11:12+08:00',
            'expired_time' => '2025-09-21T17:11:12+08:00',
            'coverage_detail' => '可保190种疾病，确诊一次性赔付',
            'support_renewal' => true,
            'start_renewal_time' => '2025-09-21T17:11:12+08:00',
            'end_renewal_time' => '2025-09-21T17:11:12+08:00',
            'policy_type' => 'POLICY_TYPE_OTHER',
            'car_number' => '粤B·AB123',
            'pet_name' => '小狗',
            'address' => '上海市浦东新区晨晖路1001号',
            'policy_state' => 'POLICY_STATE_ISSUING',
            'policy_code' => 'Coisihsiaxishishi4hihsid1ii411co',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'policy_periods' => [1],
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 上传保单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies
     */
    public function postAsync(array $options = [
        'json' => [
            'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
            'insured_name_list' => ['tCk1JSUV2QUlCQURBTkJna3Foa2lHOXc'],
            'insurance_company_code' => '1001',
            'effective_time' => '2025-09-21T17:11:12+08:00',
            'expired_time' => '2025-09-21T17:11:12+08:00',
            'coverage_detail' => '可保190种疾病，确诊一次性赔付',
            'support_renewal' => true,
            'start_renewal_time' => '2025-09-21T17:11:12+08:00',
            'end_renewal_time' => '2025-09-21T17:11:12+08:00',
            'policy_type' => 'POLICY_TYPE_OTHER',
            'car_number' => '粤B·AB123',
            'pet_name' => '小狗',
            'address' => '上海市浦东新区晨晖路1001号',
            'policy_state' => 'POLICY_STATE_ISSUING',
            'policy_code' => 'Coisihsiaxishishi4hihsid1ii411co',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'policy_periods' => [1],
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
