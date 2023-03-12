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
     * @link https://pay.weixin.qq.com/docs/merchant/apis/hire-power-bank-insurance/insurance-orders/get-qualification-by-open-id.html
     */
    public function get(array $options = [
        'openid' => '2323dfsdf342342',
    ]): ResponseInterface;

    /**
     * 查询用户保险订单领取资格(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/hire-power-bank-insurance/insurance-orders/get-qualification-by-open-id.html#async
     */
    public function getAsync(array $options = [
        'openid' => '2323dfsdf342342',
    ]): PromiseInterface;
}
