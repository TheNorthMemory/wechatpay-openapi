<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard\Authentications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PreOrder
{
    /**
     * 微工卡核身预下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/authentications/pre-order
     */
    public function post(array $options = [
        'json' => [
            'openid' => 'onqOjjmo8wmTOOtSKwXtGjg9Gb58',
            'appid' => 'wxa1111111',
            'sub_mchid' => '1111111',
            'sub_appid' => 'wxa1111111',
            'authenticate_number' => 'mcdhehfgisdhfjghed39384564i83',
            'project_name' => '某项目',
            'employer_name' => '某单位名称',
            'authenticate_type' => 'SIGN_IN',
        ],
    ]): ResponseInterface;

    /**
     * 微工卡核身预下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/authentications/pre-order
     */
    public function postAsync(array $options = [
        'json' => [
            'openid' => 'onqOjjmo8wmTOOtSKwXtGjg9Gb58',
            'appid' => 'wxa1111111',
            'sub_mchid' => '1111111',
            'sub_appid' => 'wxa1111111',
            'authenticate_number' => 'mcdhehfgisdhfjghed39384564i83',
            'project_name' => '某项目',
            'employer_name' => '某单位名称',
            'authenticate_type' => 'SIGN_IN',
        ],
    ]): PromiseInterface;
}
