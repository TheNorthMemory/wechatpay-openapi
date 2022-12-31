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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_5_4.shtml
     */
    public function patch(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'advertising_industry_filters' => ['string'],
        ],
    ]): ResponseInterface;

    /**
     * 开通广告展示(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_5_4.shtml#async
     */
    public function patchAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'advertising_industry_filters' => ['string'],
        ],
    ]): PromiseInterface;
}
