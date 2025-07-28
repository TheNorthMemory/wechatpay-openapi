<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Companies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query
{
    /**
     * 企业信息查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/companies/query
     */
    public function post(array $options = [
        'json' => [
            'qualification_region_code' => 310100,
            'license_number' => '91110108397173806M',
        ],
    ]): ResponseInterface;

    /**
     * 企业信息查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/companies/query
     */
    public function postAsync(array $options = [
        'json' => [
            'qualification_region_code' => 310100,
            'license_number' => '91110108397173806M',
        ],
    ]): PromiseInterface;
}
