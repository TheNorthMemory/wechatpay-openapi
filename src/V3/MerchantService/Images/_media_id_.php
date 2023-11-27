<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\Images;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _media_id_
{
    /**
     * 图片下载(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/consumer-complaint/images/query-images.html
     */
    public function get(array $options = [
        'media_id' => 'xxxxx',
    ]): ResponseInterface;

    /**
     * 图片下载(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/consumer-complaint/images/query-images.html#async
     */
    public function getAsync(array $options = [
        'media_id' => 'xxxxx',
    ]): PromiseInterface;
}
