<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduStar\Users\Qq;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _qq_
{
    /**
     * 通过QQ账号查询用户信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-star/users/qq/%7Bqq%7D
     */
    public function get(array $options = [
        'qq' => '100000000000',
        'query' => [
            'appid' => 'wx998877665544wx',
        ],
    ]): ResponseInterface;

    /**
     * 通过QQ账号查询用户信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-star/users/qq/%7Bqq%7D
     */
    public function getAsync(array $options = [
        'qq' => '100000000000',
        'query' => [
            'appid' => 'wx998877665544wx',
        ],
    ]): PromiseInterface;
}
