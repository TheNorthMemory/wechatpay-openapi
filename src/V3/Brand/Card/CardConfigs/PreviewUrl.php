<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Card\CardConfigs;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PreviewUrl
{
    /**
     * 获取商家名片预览二维码(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-configs/preview-url
     */
    public function get(array $options = [
        'query' => [
            'business_code' => '190001351110000',
            'applyment_id' => '1111111111',
            'brand_id' => '120344',
        ],
    ]): ResponseInterface;

    /**
     * 获取商家名片预览二维码(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-configs/preview-url
     */
    public function getAsync(array $options = [
        'query' => [
            'business_code' => '190001351110000',
            'applyment_id' => '1111111111',
            'brand_id' => '120344',
        ],
    ]): PromiseInterface;
}
