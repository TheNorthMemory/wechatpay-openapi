<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Employees\_employee_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Revoke
{
    /**
     * 企业商户发起解除员工企业支付授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/employees/%7Bemployee_id%7D/revoke
     */
    public function post(array $options = [
        'employee_id' => 'WeBizPay_a968402a-73bb-43e2-9e1a-8371b0ca3d7c',
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
        ],
    ]): ResponseInterface;

    /**
     * 企业商户发起解除员工企业支付授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/employees/%7Bemployee_id%7D/revoke
     */
    public function postAsync(array $options = [
        'employee_id' => 'WeBizPay_a968402a-73bb-43e2-9e1a-8371b0ca3d7c',
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
        ],
    ]): PromiseInterface;
}
