<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Media;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Upload
{
    /**
     * 图片上传(同步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant/media/upload
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 图片上传(异步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant/media/upload
     */
    public function postAsync(array $options = []): PromiseInterface;
}
