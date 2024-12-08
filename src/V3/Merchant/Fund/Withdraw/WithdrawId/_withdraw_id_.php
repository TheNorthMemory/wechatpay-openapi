<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund\Withdraw\WithdrawId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _withdraw_id_
{
    /**
     * 电商平台(微信支付提现单号)查询提现状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant/fund/withdraw/withdraw-id/%7Bwithdraw_id%7D
     */
    public function get(array $options = [
        'withdraw_id' => '12321937198237912739132791732123',
    ]): ResponseInterface;

    /**
     * 电商平台(微信支付提现单号)查询提现状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant/fund/withdraw/withdraw-id/%7Bwithdraw_id%7D
     */
    public function getAsync(array $options = [
        'withdraw_id' => '12321937198237912739132791732123',
    ]): PromiseInterface;
}
