<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\HirePowerBank\UserQualifications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _openid_
{
    /**
     * 查询用户保险订单领取资格(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/hire-power-bank/user-qualifications/%7Bopenid%7D
     */
    public function get(array $options = [
        'openid' => '2323dfsdf342342',
    ]): ResponseInterface;

    /**
     * 查询用户保险订单领取资格(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/hire-power-bank/user-qualifications/%7Bopenid%7D
     */
    public function getAsync(array $options = [
        'openid' => '2323dfsdf342342',
    ]): PromiseInterface;
}
