<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Withdraw;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read DayEndBalanceWithdraw\OutRequestNo $outRequestNo
 */
interface DayEndBalanceWithdraw
{
    /**
     * 二级商户按日终余额预约提现(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/withdraw/day-end-balance-withdraw
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_request_no' => '20190611222222222200000000012122',
            'calculate_amount_type' => 'ONLY_DAY_END_BALANCE',
            'remark' => '交易提现',
            'bank_memo' => '微信支付提现',
            'notify_url' => 'https://yourapp.com/notify',
            'reserve_amount' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 二级商户按日终余额预约提现(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/withdraw/day-end-balance-withdraw
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_request_no' => '20190611222222222200000000012122',
            'calculate_amount_type' => 'ONLY_DAY_END_BALANCE',
            'remark' => '交易提现',
            'bank_memo' => '微信支付提现',
            'notify_url' => 'https://yourapp.com/notify',
            'reserve_amount' => 100,
        ],
    ]): PromiseInterface;
}
