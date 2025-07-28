<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Authcode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Commit
{
    /**
     * 品类凭证码上报确认(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/authcode/commit
     */
    public function post(array $options = [
        'json' => [
            'sp_serial_no' => '',
            'cred_frozen_no' => '',
            'trans_date' => '',
            'trans_time' => '',
            'acq_org_order_no' => '',
            'order_no' => '',
            'subsidy_amt' => 0,
            'add_code' => '',
            'address' => '',
            'sale_models' => '0 | 1',
            'corp_name' => '',
            'brand' => '',
            'uniscid' => '',
            'barcode' => '',
            'auth_code' => '',
            'req_ssn' => '123',
            'bank_name' => '',
            'bank_subsidy' => '',
            'plat_subsidy' => '',
            'county_code' => '330000',
            'amount' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 品类凭证码上报确认(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/authcode/commit
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_serial_no' => '',
            'cred_frozen_no' => '',
            'trans_date' => '',
            'trans_time' => '',
            'acq_org_order_no' => '',
            'order_no' => '',
            'subsidy_amt' => 0,
            'add_code' => '',
            'address' => '',
            'sale_models' => '0 | 1',
            'corp_name' => '',
            'brand' => '',
            'uniscid' => '',
            'barcode' => '',
            'auth_code' => '',
            'req_ssn' => '123',
            'bank_name' => '',
            'bank_subsidy' => '',
            'plat_subsidy' => '',
            'county_code' => '330000',
            'amount' => 0,
        ],
    ]): PromiseInterface;
}
