<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\ActivateInformations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _activate_ticket_
{
    /**
     * 获取用户信息（跳转型激活）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_5.shtml
     */
    public function get(array $options = [
        'activate_ticket' => 'abcdefg',
    ]): ResponseInterface;

    /**
     * 获取用户信息（跳转型激活）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_5.shtml#async
     */
    public function getAsync(array $options = [
        'activate_ticket' => 'abcdefg',
    ]): PromiseInterface;
}
