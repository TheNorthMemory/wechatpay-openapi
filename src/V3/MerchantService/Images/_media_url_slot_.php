<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\Images;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _media_url_slot_
{
    /**
     * 图片下载(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter10_2_18.shtml
     */
    public function get(array $options = [
        'media_url_slot' => '',
    ]): ResponseInterface;

    /**
     * 图片下载(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter10_2_18.shtml#async
     */
    public function getAsync(array $options = [
        'media_url_slot' => '',
    ]): PromiseInterface;
}
