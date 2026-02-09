<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\MerchantService\Images;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _media_id_
{
    /**
     * 图片下载(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/images/%7Bmedia_id%7D
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'media_id' => 'xxxxx',
        'query' => [
            'complaint_id' => '200201820200101080076610000',
        ],
    ]): ResponseInterface;

    /**
     * 图片下载(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/images/%7Bmedia_id%7D
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'media_id' => 'xxxxx',
        'query' => [
            'complaint_id' => '200201820200101080076610000',
        ],
    ]): PromiseInterface;
}
