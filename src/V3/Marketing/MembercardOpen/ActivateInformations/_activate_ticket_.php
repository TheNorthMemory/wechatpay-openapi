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
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/activate-informations/%7Bactivate_ticket%7D
     */
    public function get(array $options = [
        'activate_ticket' => 'abcdefg',
    ]): ResponseInterface;

    /**
     * 获取用户信息（跳转型激活）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/activate-informations/%7Bactivate_ticket%7D
     */
    public function getAsync(array $options = [
        'activate_ticket' => 'abcdefg',
    ]): PromiseInterface;
}
