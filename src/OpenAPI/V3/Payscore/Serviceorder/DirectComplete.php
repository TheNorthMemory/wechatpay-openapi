<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface DirectComplete
{
    /**
     * 创单结单合并(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_9.shtml
     */
    public function post(array $options = [
        'json' => [
        ],
    ]): ResponseInterface;

    /**
     * 创单结单合并(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_9.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
        ],
    ]): PromiseInterface;
}
