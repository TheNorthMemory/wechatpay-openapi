<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Media;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Video_upload
{
    /**
     * 视频上传(同步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/video.mp4');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/chapter3_2.shtml
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 视频上传(异步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/video.mp4');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/chapter3_2.shtml#async
     */
    public function postAsync(array $options = []): PromiseInterface;
}
