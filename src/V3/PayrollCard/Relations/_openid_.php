<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard\Relations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _openid_
{
    /**
     * 查询微工卡授权关系(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/relations/%7Bopenid%7D
     */
    public function get(array $options = [
        'openid' => '9x111111',
        'query' => [
            'sub_mchid' => '1111111',
            'appid' => 'wxa1111111',
            'sub_appid' => 'wxa1111111',
        ],
    ]): ResponseInterface;

    /**
     * 查询微工卡授权关系(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/relations/%7Bopenid%7D
     */
    public function getAsync(array $options = [
        'openid' => '9x111111',
        'query' => [
            'sub_mchid' => '1111111',
            'appid' => 'wxa1111111',
            'sub_appid' => 'wxa1111111',
        ],
    ]): PromiseInterface;
}
