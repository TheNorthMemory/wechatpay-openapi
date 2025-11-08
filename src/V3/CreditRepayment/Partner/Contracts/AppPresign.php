<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CreditRepayment\Partner\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AppPresign
{
    /**
     * APP预签约自动还款协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/contracts/app-presign
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'plan_id' => '123',
            'out_contract_code' => '100001256',
            'display_name' => '*明',
            'contract_notify_url' => 'https://pay.weixin.qq.com',
            'repayment_day' => 1,
            'repayment_amount_limit' => '10000',
            'sub_merchant_code' => 'example_sub_merchant_code',
            'sub_appid' => 'example_sub_appid',
        ],
    ]): ResponseInterface;

    /**
     * APP预签约自动还款协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/contracts/app-presign
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'plan_id' => '123',
            'out_contract_code' => '100001256',
            'display_name' => '*明',
            'contract_notify_url' => 'https://pay.weixin.qq.com',
            'repayment_day' => 1,
            'repayment_amount_limit' => '10000',
            'sub_merchant_code' => 'example_sub_merchant_code',
            'sub_appid' => 'example_sub_appid',
        ],
    ]): PromiseInterface;
}
