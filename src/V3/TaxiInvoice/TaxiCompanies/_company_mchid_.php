<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\TaxiCompanies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _company_mchid_
{
    /**
     * 获取出租车公司商户信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/taxi-companies/%7Bcompany_mchid%7D
     */
    public function get(array $options = [
        'company_mchid' => '1900000109',
        'query' => [
            'region_id' => 510100,
        ],
    ]): ResponseInterface;

    /**
     * 获取出租车公司商户信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/taxi-companies/%7Bcompany_mchid%7D
     */
    public function getAsync(array $options = [
        'company_mchid' => '1900000109',
        'query' => [
            'region_id' => 510100,
        ],
    ]): PromiseInterface;
}
