<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\ActivateInformations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _activate_ticket_
{
    /**
     * 获取用户信息（跳转型激活）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_5.shtml
     */
    public function get(array $options = [
        'activate_ticket' => '',
    ]): ResponseInterface;

    /**
     * 获取用户信息（跳转型激活）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_5.shtml#async
     */
    public function getAsync(array $options = [
        'activate_ticket' => '',
    ]): PromiseInterface;
}
