<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard\Authentications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PreOrderWithAuth
{
    /**
     * 微工卡核身预下单（流程中完成授权）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/authentications/pre-order-with-auth
     */
    public function post(array $options = [
        'json' => [
            'openid' => 'onqOjjmo8wmTOOtSKwXtGjg9Gb58',
            'appid' => 'wxa1111111',
            'sub_mchid' => '1111111',
            'sub_appid' => 'wxa1111111',
            'authenticate_number' => 'mcdhehfgisdhfjghed39384564i83',
            'project_name' => '某项目',
            'employer_name' => '某用工企业',
            'user_name' => 'LP7bT4hQXUsOZCEvK2YrSiqFsnP0oRMfeoLN0vBg',
            'id_card_number' => '7FzH5XksJG3a8HLLsaaUV6K54y1OnPMY5',
            'employment_type' => 'LONG_TERM_EMPLOYMENT',
            'authenticate_type' => 'SIGN_IN',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 微工卡核身预下单（流程中完成授权）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/authentications/pre-order-with-auth
     */
    public function postAsync(array $options = [
        'json' => [
            'openid' => 'onqOjjmo8wmTOOtSKwXtGjg9Gb58',
            'appid' => 'wxa1111111',
            'sub_mchid' => '1111111',
            'sub_appid' => 'wxa1111111',
            'authenticate_number' => 'mcdhehfgisdhfjghed39384564i83',
            'project_name' => '某项目',
            'employer_name' => '某用工企业',
            'user_name' => 'LP7bT4hQXUsOZCEvK2YrSiqFsnP0oRMfeoLN0vBg',
            'id_card_number' => '7FzH5XksJG3a8HLLsaaUV6K54y1OnPMY5',
            'employment_type' => 'LONG_TERM_EMPLOYMENT',
            'authenticate_type' => 'SIGN_IN',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
