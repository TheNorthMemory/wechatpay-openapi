<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\FapiaoApplications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface UploadFapiaoFile
{
    /**
     * 上传电子发票文件(同步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.5.0
     * $digest = \WeChatPay\Crypto\Sm3::file('file:///path/to/fapiao.pdf');
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/fapiao.pdf');
     * $json  = [
     *     'sub_mchid'        => 'your_sub_mchid', //服务商模式下必传
     *     'file_type'        => 'PDF',
     *     'digest_algorithm' => 'SM3',
     *     'digest'           => $digest,
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'body'       => $media->getStream(),
     *     'headers'    => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_10.shtml
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 上传电子发票文件(异步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.5.0
     * $digest = \WeChatPay\Crypto\Sm3::file('file:///path/to/fapiao.pdf');
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/fapiao.pdf');
     * $json  = [
     *     'sub_mchid'        => 'your_sub_mchid', //服务商模式下必传
     *     'file_type'        => 'PDF',
     *     'digest_algorithm' => 'SM3',
     *     'digest'           => $digest,
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'body'       => $media->getStream(),
     *     'headers'    => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_10.shtml#async
     */
    public function postAsync(array $options = []): PromiseInterface;
}
