<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CreditRepayment\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read DeductOrders\_out_trade_no_ $_out_trade_no_
 */
interface DeductOrders
{
    /**
     * 发起还款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/deduct-orders
     */
    public function post(array $options = [
        'json' => [
            'contract_id' => '20251105000000123456789',
            'out_trade_no' => '1217752501201407033233368018',
            'out_record_id' => '1234567abcde',
            'deduct_amount' => '10000',
            'notify_url' => 'wxd678efh567hg6787',
        ],
    ]): ResponseInterface;

    /**
     * 发起还款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/deduct-orders
     */
    public function postAsync(array $options = [
        'json' => [
            'contract_id' => '20251105000000123456789',
            'out_trade_no' => '1217752501201407033233368018',
            'out_record_id' => '1234567abcde',
            'deduct_amount' => '10000',
            'notify_url' => 'wxd678efh567hg6787',
        ],
    ]): PromiseInterface;
}
