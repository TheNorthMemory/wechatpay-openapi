<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Users\_user_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AuthorizationUrl
{
    /**
     * 企业商户发起员工开通企业支付授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/users/%7Buser_id%7D/authorization-url
     */
    public function post(array $options = [
        'user_id' => '123456',
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'application_type' => 'H5',
        ],
    ]): ResponseInterface;

    /**
     * 企业商户发起员工开通企业支付授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/users/%7Buser_id%7D/authorization-url
     */
    public function postAsync(array $options = [
        'user_id' => '123456',
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'application_type' => 'H5',
        ],
    ]): PromiseInterface;
}
