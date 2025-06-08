<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface TradeBill
{
    /**
     * 申请企业商户企业支付业务账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/bill/trade-bill
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'date' => '2025-04-23',
            'type' => 'QYZFALL',
        ],
    ]): ResponseInterface;

    /**
     * 申请企业商户企业支付业务账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/bill/trade-bill
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'date' => '2025-04-23',
            'type' => 'QYZFALL',
        ],
    ]): PromiseInterface;
}
