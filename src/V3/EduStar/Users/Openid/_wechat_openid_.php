<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduStar\Users\Openid;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _wechat_openid_
{
    /**
     * 通过微信用户标识查询用户信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-star/users/openid/%7Bwechat_openid%7D
     */
    public function get(array $options = [
        'wechat_openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'appid' => 'wx998877665544wx',
        ],
    ]): ResponseInterface;

    /**
     * 通过微信用户标识查询用户信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-star/users/openid/%7Bwechat_openid%7D
     */
    public function getAsync(array $options = [
        'wechat_openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'appid' => 'wx998877665544wx',
        ],
    ]): PromiseInterface;
}
