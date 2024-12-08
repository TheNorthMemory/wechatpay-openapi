<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Tools;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Authcodetoopenid
{
    /**
     * 授权码查询openid(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/tools/authcodetoopenid
     */
    public function post(array $options = [
        'xml' => [
            'appid' => '',
            'mch_id' => '',
            'sub_appid' => '',
            'sub_mch_id' => '',
            'auth_code' => '',
        ],
    ]): ResponseInterface;

    /**
     * 授权码查询openid(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/tools/authcodetoopenid
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => '',
            'mch_id' => '',
            'sub_appid' => '',
            'sub_mch_id' => '',
            'auth_code' => '',
        ],
    ]): PromiseInterface;
}
