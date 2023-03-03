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
     * @link 获取出租车公司商户信息 [官方文档](hhttps://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/taxi-company/query-taxi-company.html)
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
     * @link 获取出租车公司商户信息 [官方文档](hhttps://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/taxi-company/query-taxi-company.html)#async
     */
    public function getAsync(array $options = [
        'company_mchid' => '1900000109',
        'query' => [
            'region_id' => 510100,
        ],
    ]): PromiseInterface;
}
