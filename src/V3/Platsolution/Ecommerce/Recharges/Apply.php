<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Recharges;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 申请充值(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-recharge/recharge/apply.html
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
     * 申请充值(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-recharge/recharge/apply.html#async
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
