<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\MerchantStorage\File;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Upload
{
    /**
     * 上传文件(同步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-storage/file/upload
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
    ]): ResponseInterface;

    /**
     * 上传文件(异步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-storage/file/upload
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
    ]): PromiseInterface;
}
