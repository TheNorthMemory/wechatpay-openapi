<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard\Wesure;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Insurance
{
    /**
     * 生成投保结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/wesure/insurance
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'wesure_order_no' => '1900000109',
            'token' => '5fds5345dfd',
            'insurance_company_order_no' => '5fds5345dfd',
            'openid' => '111111',
            'insure_state' => 'INSURE_SUCCESS',
            'insure_effect_time' => '2018-06-08T10:34:56+08:00',
            'insure_invalid_time' => '2018-06-08T10:34:56+08:00',
            'insurance_company_name' => '平安',
        ],
    ]): ResponseInterface;

    /**
     * 生成投保结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/wesure/insurance
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'wesure_order_no' => '1900000109',
            'token' => '5fds5345dfd',
            'insurance_company_order_no' => '5fds5345dfd',
            'openid' => '111111',
            'insure_state' => 'INSURE_SUCCESS',
            'insure_effect_time' => '2018-06-08T10:34:56+08:00',
            'insure_invalid_time' => '2018-06-08T10:34:56+08:00',
            'insurance_company_name' => '平安',
        ],
    ]): PromiseInterface;
}
