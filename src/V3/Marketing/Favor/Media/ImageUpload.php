<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Media;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ImageUpload
{
    /**
     * （营销）图片上传(同步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/media/image-upload
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * （营销）图片上传(异步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/media/image-upload
     */
    public function postAsync(array $options = []): PromiseInterface;
}
