<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Businesscircle\UserAuthorizations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _openid_
{
    /**
     * 商圈积分授权查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter8_6_4.shtml
     */
    public function get(array $options = [
        'openid' => 'oWmnN4xxxxxxxxxxe92NHIGf1xd8',
        'query' => [
            'appid' => 'wx1234567890abcdef',
        ],
    ]): ResponseInterface;

    /**
     * 商圈积分授权查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter8_6_4.shtml#async
     */
    public function getAsync(array $options = [
        'openid' => 'oWmnN4xxxxxxxxxxe92NHIGf1xd8',
        'query' => [
            'appid' => 'wx1234567890abcdef',
        ],
    ]): PromiseInterface;
}
