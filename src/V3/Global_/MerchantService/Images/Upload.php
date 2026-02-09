<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\MerchantService\Images;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Upload
{
    /**
     * 商户上传反馈图片(同步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $options = [
     *     'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
     *     'body'     => $media->getStream(),
     *     'headers'  => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/images/upload
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 商户上传反馈图片(异步模式)
     *
     * ```php
     * $media   = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $options = [
     *     'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
     *     'body'     => $media->getStream(),
     *     'headers'  => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/images/upload
     */
    public function postAsync(array $options = []): PromiseInterface;
}
