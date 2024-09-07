<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\BankTransferRecharges;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 申请银行转账充值(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-recharge/bank-recharge/bank-transfer-recharge-apply.html
     */
    public function post(array $options = [
        'json' => [
            'out_recharge_no' => 'cz202407181234',
            'recharge_scene' => 'ECOMMERCE_BANK_TRANSFER',
            'account_type' => 'BASIC',
            'recharge_amount' => [
                'amount' => 500000,
                'currency' => 'CNY',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 申请银行转账充值(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-recharge/bank-recharge/bank-transfer-recharge-apply.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_recharge_no' => 'cz202407181234',
            'recharge_scene' => 'ECOMMERCE_BANK_TRANSFER',
            'account_type' => 'BASIC',
            'recharge_amount' => [
                'amount' => 500000,
                'currency' => 'CNY',
            ],
        ],
    ]): PromiseInterface;
}
