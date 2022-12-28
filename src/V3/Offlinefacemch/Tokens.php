<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlinefacemch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Tokens
{
    /**
     * 获取凭证授权接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 获取凭证授权接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html#async
     */
    public function postAsync(array $options = []): PromiseInterface;
}
