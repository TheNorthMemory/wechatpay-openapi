<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantSettlement\MerchantSettleRuleApplications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _application_id_
{
    /**
     * 根据申请单ID查询结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-settlement/merchant-settle-rule-applications/%7Bapplication_id%7D
     */
    public function get(array $options = [
        'application_id' => '20000011111',
    ]): ResponseInterface;

    /**
     * 根据申请单ID查询结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-settlement/merchant-settle-rule-applications/%7Bapplication_id%7D
     */
    public function getAsync(array $options = [
        'application_id' => '20000011111',
    ]): PromiseInterface;
}
