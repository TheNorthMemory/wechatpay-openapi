<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Recharges;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 申请二级商户充值(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharges/apply
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'out_recharge_no' => 'cz202407181234',
            'recharge_scene' => 'ECOMMERCE_DEPOSIT',
            'account_type' => 'DEPOSIT',
            'recharge_amount' => [
                'amount' => 500000,
                'currency' => 'CNY',
            ],
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): ResponseInterface;

    /**
     * 申请二级商户充值(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharges/apply
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'out_recharge_no' => 'cz202407181234',
            'recharge_scene' => 'ECOMMERCE_DEPOSIT',
            'account_type' => 'DEPOSIT',
            'recharge_amount' => [
                'amount' => 500000,
                'currency' => 'CNY',
            ],
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): PromiseInterface;
}
