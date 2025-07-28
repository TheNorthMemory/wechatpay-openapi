<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Audit\Cup;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Invalid
{
    /**
     * 查询审核结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/audit/cup/invalid
     */
    public function post(array $options = [
        'json' => [
            'org_no' => '',
            'mchnt_order_id' => '',
            'upload_time' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询审核结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/audit/cup/invalid
     */
    public function postAsync(array $options = [
        'json' => [
            'org_no' => '',
            'mchnt_order_id' => '',
            'upload_time' => '',
        ],
    ]): PromiseInterface;
}
