<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Account\CancelApplications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Media
{
    /**
     * 图片上传(同步模式)
     *
     * ```php
     * $digest = \hash_file('sha256', 'file:///path/to/image.jpg');
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $json  = [
     *     'file_name'   => 'image.jpg',
     *     'file_digest' => $digest,
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'body'       => $media->getStream(),
     *     'headers'    => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-cancel/media/upload-media.html
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 图片上传(异步模式)
     *
     * ```php
     * $digest = \hash_file('sha256', 'file:///path/to/image.jpg');
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $json  = [
     *     'file_name'   => 'image.jpg',
     *     'file_digest' => $digest,
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'body'       => $media->getStream(),
     *     'headers'    => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-cancel/media/upload-media.html#async
     */
    public function postAsync(array $options = []): PromiseInterface;
}
