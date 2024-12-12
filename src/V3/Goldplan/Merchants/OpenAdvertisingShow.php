<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Goldplan\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface OpenAdvertisingShow
{
    /**
     * 开通广告展示(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/goldplan/merchants/open-advertising-show
     */
    public function patch(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'advertising_industry_filters' => ['E_COMMERCE'],
        ],
    ]): ResponseInterface;

    /**
     * 开通广告展示(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/goldplan/merchants/open-advertising-show
     */
    public function patchAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'advertising_industry_filters' => ['E_COMMERCE'],
        ],
    ]): PromiseInterface;
}
