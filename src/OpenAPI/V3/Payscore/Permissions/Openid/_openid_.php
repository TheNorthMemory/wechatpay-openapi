<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Permissions\Openid;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _openid_\Terminate $terminate
 */
interface _openid_
{
    /**
     * 查询与用户授权记录（openid）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_5.shtml
     */
    public function get(array $options = [
        'openid' => '',
        'query' => [
            'service_id' => '',
            'appid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询与用户授权记录（openid）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_5.shtml#async
     */
    public function getAsync(array $options = [
        'openid' => '',
        'query' => [
            'service_id' => '',
            'appid' => '',
        ],
    ]): PromiseInterface;
}
