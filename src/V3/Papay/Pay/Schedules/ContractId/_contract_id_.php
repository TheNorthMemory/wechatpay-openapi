<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\Pay\Schedules\ContractId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _contract_id_\Schedule $schedule
 */
interface _contract_id_
{
    /**
     * 查询扣费预约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/pay/schedules/contract-id/%7Bcontract_id%7D
     */
    public function get(array $options = [
        'contract_id' => '123124412412423431',
    ]): ResponseInterface;

    /**
     * 查询扣费预约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/pay/schedules/contract-id/%7Bcontract_id%7D
     */
    public function getAsync(array $options = [
        'contract_id' => '123124412412423431',
    ]): PromiseInterface;
}
