<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Transit\Partnerpay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querystate
{
    /**
     * 查询用户状态接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/transit/partnerpay/querystate
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165489',
            'mch_id' => '10000098',
            'sub_mch_id' => '1900000109',
            'contract_id' => 'wx15463511252015071056489715',
            'sign_type' => 'hmac-sha256',
            'openid' => 'oyobu0dmn6tdodznfwkoekqorbi8',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户状态接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/transit/partnerpay/querystate
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165489',
            'mch_id' => '10000098',
            'sub_mch_id' => '1900000109',
            'contract_id' => 'wx15463511252015071056489715',
            'sign_type' => 'hmac-sha256',
            'openid' => 'oyobu0dmn6tdodznfwkoekqorbi8',
        ],
    ]): PromiseInterface;
}
