<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\User;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Cards
{
    /**
     * 查询用户在品牌下所有会员卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_5.shtml
     */
    public function get(array $options = [
        'query' => [
            'openid' => '',
            'appid' => '',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 查询用户在品牌下所有会员卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'openid' => '',
            'appid' => '',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): PromiseInterface;
}
