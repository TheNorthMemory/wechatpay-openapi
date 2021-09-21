<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Uploadmedia
{
    /**
     * 图片上传(同步模式)
     *
     * ```php
     * $options = [
     *     'body' => new \GuzzleHttp\Psr7\MultipartStream([
     *         ['name' => 'media', 'content' => 'file:///path/to/image.jpg', 'filename' => 'image.jpg'],
     *         ['name' => 'mch_id', 'content' => $mchid],
     *         ['name' => 'media_hash', 'content' => $mediaMd5Digest],
     *         ['name' => 'sign_type', 'content' => $signType],
     *         ['name' => 'sign', 'content' => \WeChatPay\Crypto\Hash::sign(
     *             $signType, "mch_id=$mchid&media_hash=$mediaMd5Digest&sign_type=$signType", $apiv2Key
     *         )],
     *     ]),
     *     'ssl_key' => 'file:///path/to/apiclient_key.pem',
     *     'cert' => 'file:///path/to/apiclient_cert.pem',
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=19_9
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 图片上传(异步模式)
     *
     * ```php
     * $options = [
     *     'body' => new \GuzzleHttp\Psr7\MultipartStream([
     *         ['name' => 'media', 'content' => 'file:///path/to/image.jpg', 'filename' => 'image.jpg'],
     *         ['name' => 'mch_id', 'content' => $mchid],
     *         ['name' => 'media_hash', 'content' => $mediaMd5Digest],
     *         ['name' => 'sign_type', 'content' => $signType],
     *         ['name' => 'sign', 'content' => \WeChatPay\Crypto\Hash::sign(
     *             $signType, "mch_id=$mchid&media_hash=$mediaMd5Digest&sign_type=$signType", $apiv2Key
     *         )],
     *     ]),
     *     'ssl_key' => 'file:///path/to/apiclient_key.pem',
     *     'cert' => 'file:///path/to/apiclient_cert.pem',
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=19_9#async
     */
    public function postAsync(array $options = []): PromiseInterface;
}
