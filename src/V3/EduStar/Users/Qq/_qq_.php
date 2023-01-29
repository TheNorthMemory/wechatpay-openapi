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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/assets/img/common/edu/edu-star/chapter2_3.png
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/assets/img/common/edu/edu-star/chapter2_3.png#async
     */
    public function getAsync(array $options = [
        'qq' => '100000000000',
        'query' => [
            'appid' => 'wx998877665544wx',
        ],
    ]): PromiseInterface;
}
