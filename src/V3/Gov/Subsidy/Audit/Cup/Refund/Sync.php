<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Audit\Cup\Refund;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 同步非银联支付交易退款信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/audit/cup/refund/sync
     */
    public function post(array $options = [
        'json' => [
            'org_no' => '',
            'mchnt_order_id' => '',
            'upload_time' => '',
            'refund_at' => '',
            'refund_dt' => '',
        ],
    ]): ResponseInterface;

    /**
     * 同步非银联支付交易退款信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/audit/cup/refund/sync
     */
    public function postAsync(array $options = [
        'json' => [
            'org_no' => '',
            'mchnt_order_id' => '',
            'upload_time' => '',
            'refund_at' => '',
            'refund_dt' => '',
        ],
    ]): PromiseInterface;
}
