<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Inspolicymgr\Deduct\Policies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_insurance_no_
{
    /**
     * 查询保单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies/%7Bout_insurance_no%7D
     */
    public function get(array $options = [
        'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
    ]): ResponseInterface;

    /**
     * 查询保单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies/%7Bout_insurance_no%7D
     */
    public function getAsync(array $options = [
        'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
    ]): PromiseInterface;

    /**
     * 更新保单信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies/%7Bout_insurance_no%7D#patch
     */
    public function patch(array $options = [
        'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
        'json' => [
            'insured_name_list' => ['tCk1JSUV2QUlCQURBTkJna3Foa2lHOXc'],
            'insurance_name' => '微医保·百万医疗险',
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
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 更新保单信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/policies/%7Bout_insurance_no%7D#patch
     */
    public function patchAsync(array $options = [
        'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
        'json' => [
            'insured_name_list' => ['tCk1JSUV2QUlCQURBTkJna3Foa2lHOXc'],
            'insurance_name' => '微医保·百万医疗险',
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
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
