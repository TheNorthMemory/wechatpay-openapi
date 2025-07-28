<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\NQualifications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Confirm
{
    /**
     * n品类核销(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/n-qualifications/confirm
     */
    public function post(array $options = [
        'json' => [
            'data' => [[
                'cate_code' => '',
                'cert_no' => '',
                'grade' => '',
                'name' => '',
                'operation_time' => '',
                'bank_name' => '',
                'bank_subsidy' => '',
                'plat_subsidy' => '',
                'sales' => '',
                'status' => '',
                'subsidy' => '',
                'tel' => '',
                'add_code' => '',
                'address' => '',
                'sale_models' => '',
                'brand' => '',
                'activity_add_code' => '',
                'uniscid' => '',
                'corp_name' => '',
                'serial_num' => '',
            ],],
            'req_ssn' => '123',
            'req_time' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * n品类核销(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/n-qualifications/confirm
     */
    public function postAsync(array $options = [
        'json' => [
            'data' => [[
                'cate_code' => '',
                'cert_no' => '',
                'grade' => '',
                'name' => '',
                'operation_time' => '',
                'bank_name' => '',
                'bank_subsidy' => '',
                'plat_subsidy' => '',
                'sales' => '',
                'status' => '',
                'subsidy' => '',
                'tel' => '',
                'add_code' => '',
                'address' => '',
                'sale_models' => '',
                'brand' => '',
                'activity_add_code' => '',
                'uniscid' => '',
                'corp_name' => '',
                'serial_num' => '',
            ],],
            'req_ssn' => '123',
            'req_time' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
