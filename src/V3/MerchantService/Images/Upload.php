<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\Images;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Upload
{
    /**
     * 商户上传反馈图片(同步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('fle:///path/to/image.jpg');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter5_1.shtml
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 商户上传反馈图片(异步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('fle:///path/to/image.jpg');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/merchant-service/chapter5_1.shtml#async
     */
    public function postAsync(array $options = []): PromiseInterface;
}
