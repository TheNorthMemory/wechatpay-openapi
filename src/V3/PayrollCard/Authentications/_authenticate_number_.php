<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard\Authentications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _authenticate_number_
{
    /**
     * 获取核身结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/authentications/%7Bauthenticate_number%7D
     */
    public function get(array $options = [
        'authenticate_number' => 'mcdhehfgisdhfjghed39384564i83',
        'query' => [
            'sub_mchid' => '1111111',
        ],
    ]): ResponseInterface;

    /**
     * 获取核身结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/authentications/%7Bauthenticate_number%7D
     */
    public function getAsync(array $options = [
        'authenticate_number' => 'mcdhehfgisdhfjghed39384564i83',
        'query' => [
            'sub_mchid' => '1111111',
        ],
    ]): PromiseInterface;
}
