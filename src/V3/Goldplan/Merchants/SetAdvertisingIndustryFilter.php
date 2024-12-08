<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Goldplan\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SetAdvertisingIndustryFilter
{
    /**
     * 同业过滤标签管理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/goldplan/merchants/set-advertising-industry-filter
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'advertising_industry_filters' => ['string'],
        ],
    ]): ResponseInterface;

    /**
     * 同业过滤标签管理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/goldplan/merchants/set-advertising-industry-filter
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'advertising_industry_filters' => ['string'],
        ],
    ]): PromiseInterface;
}
