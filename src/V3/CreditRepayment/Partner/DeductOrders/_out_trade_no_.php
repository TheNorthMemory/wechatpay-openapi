<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CreditRepayment\Partner\DeductOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_trade_no_
{
    /**
     * 查询还款单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/deduct-orders/%7Bout_trade_no%7D
     */
    public function get(array $options = [
        'out_trade_no' => '1217752501201407033233368018',
    ]): ResponseInterface;

    /**
     * 查询还款单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/deduct-orders/%7Bout_trade_no%7D
     */
    public function getAsync(array $options = [
        'out_trade_no' => '1217752501201407033233368018',
    ]): PromiseInterface;
}
