<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Entrustweb
{
    /**
     * 公众号纯签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay_v2/papay/chapter3_1.shtml
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * 公众号纯签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay_v2/papay/chapter3_1.shtml#async
     */
    public function getAsync(array $options = []): PromiseInterface;
}
