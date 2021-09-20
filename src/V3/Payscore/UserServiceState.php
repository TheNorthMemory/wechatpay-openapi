<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface UserServiceState
{
    /**
     * 查询用户授权状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_8.shtml
     */
    public function get(array $options = [
        'query' => [
            'appid' => '',
            'service_id' => '',
            'openid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户授权状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_8.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'appid' => '',
            'service_id' => '',
            'openid' => '',
        ],
    ]): PromiseInterface;
}
