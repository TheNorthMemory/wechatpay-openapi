<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\Complaints;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _transaction_id_\NegotiationHistorys $negotiationHistorys
 */
interface _transaction_id_
{
    /**
     * 查询投诉详情(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.11.27
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints/%7Btransaction_id%7D
     */
    public function get(array $options = [
        'transaction_id' => '4200000404201909069117582536',
    ]): ResponseInterface;

    /**
     * 查询投诉详情(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.11.27
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints/%7Btransaction_id%7D
     */
    public function getAsync(array $options = [
        'transaction_id' => '4200000404201909069117582536',
    ]): PromiseInterface;
}
