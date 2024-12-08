<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\ShoppingReceipt;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Shoppingreceipts
{
    /**
     * 上传电子小票(同步模式)
     *
     * ```php
     * $digest = \hash_file('sha256', 'file:///path/to/image.jpg');
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $json  = [
     *     'transaction_id'               => '420000153220220···158964',
     *     'transaction_mchid'            => '1900006#',
     *     'transaction_sub_mchid'        => '',
     *     'out_trade_no'                 => 'sdk123456789202205#809',
     *     'openid'                       => 'oK7fFt8zzEZ909XH-LE2',
     *     'sha256'                       => $digest,
     *     'upload_time'                  => '2022-05-07T15:39:35.000+08:00',
     *     'merchant_contact_information' => [
     *         'consultation_phone_number' => 'pVd1HJ6v/69bDnuC4EL5Kz4jBHLiCa8MRtelw/wDa4SzfeespQO/0kjiwfqdfg==',//平台证书加密
     *     ],
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'body'    => $media->getStream(),
     *     'headers' => ['Content-type' => $media->getContentType(), 'Wechatpay-Serial' => '',]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/shopping-receipt/shoppingreceipts
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 上传电子小票(异步模式)
     *
     * ```php
     * $digest = \hash_file('sha256', 'file:///path/to/image.jpg');
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $json  = [
     *     'transaction_id'               => '420000153220220···158964',
     *     'transaction_mchid'            => '1900006#',
     *     'transaction_sub_mchid'        => '',
     *     'out_trade_no'                 => 'sdk123456789202205#809',
     *     'openid'                       => 'oK7fFt8zzEZ909XH-LE2',
     *     'sha256'                       => $digest,
     *     'upload_time'                  => '2022-05-07T15:39:35.000+08:00',
     *     'merchant_contact_information' => [
     *         'consultation_phone_number' => 'pVd1HJ6v/69bDnuC4EL5Kz4jBHLiCa8MRtelw/wDa4SzfeespQO/0kjiwfqdfg==',//平台证书加密
     *     ],
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'body'    => $media->getStream(),
     *     'headers' => ['Content-type' => $media->getContentType(), 'Wechatpay-Serial' => '',]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/shopping-receipt/shoppingreceipts
     */
    public function postAsync(array $options = []): PromiseInterface;
}
