<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\Cards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UploadFile
{
    /**
     * 上传出租车电子发票文件(同步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.5.0
     * $digest = \WeChatPay\Crypto\Sm3::file('file:///path/to/fapiao.pdf');
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/fapiao.pdf');
     * $json  = [
     *     'company_mchid'    => 'your_sub_mchid', //服务商模式下必传
     *     'region_id'        => 310100,
     *     'digest_algorithm' => 'DIGEST_ALGORITHM_SM3',
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
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/cards/upload-file
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 上传出租车电子发票文件(异步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.5.0
     * $digest = \WeChatPay\Crypto\Sm3::file('file:///path/to/fapiao.pdf');
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/fapiao.pdf');
     * $json  = [
     *     'company_mchid'    => 'your_sub_mchid', //服务商模式下必传
     *     'region_id'        => 310100,
     *     'digest_algorithm' => 'DIGEST_ALGORITHM_SM3',
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
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/cards/upload-file
     */
    public function postAsync(array $options = []): PromiseInterface;
}
