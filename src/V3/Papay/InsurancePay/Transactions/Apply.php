<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\InsurancePay\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 保险商户受理保险自动续费扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-pay/transactions/apply
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'out_trade_no' => '1217752501201407033233368018',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'transaction_notify_url' => 'https://www.qq.com/',
            'contract_id' => '123124412412423431',
            'policy_period_id' => 1,
            'amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
            'goods_tag' => 'DISCOUNTS',
            'attach' => '自定义数据',
        ],
    ]): ResponseInterface;

    /**
     * 保险商户受理保险自动续费扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-pay/transactions/apply
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'out_trade_no' => '1217752501201407033233368018',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'transaction_notify_url' => 'https://www.qq.com/',
            'contract_id' => '123124412412423431',
            'policy_period_id' => 1,
            'amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
            'goods_tag' => 'DISCOUNTS',
            'attach' => '自定义数据',
        ],
    ]): PromiseInterface;
}
