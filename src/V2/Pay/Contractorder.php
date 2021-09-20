<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Contractorder
{
    /**
     * 支付中签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_13&index=5
     */
    public function post(array $options = [
        'xml' => [
        ],
    ]): ResponseInterface;

    /**
     * 支付中签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_13&index=5#async
     */
    public function postAsync(array $options = [
        'xml' => [
        ],
    ]): PromiseInterface;
}
