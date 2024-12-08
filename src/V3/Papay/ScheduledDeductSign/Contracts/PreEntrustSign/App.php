<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\ScheduledDeductSign\Contracts\PreEntrustSign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface App
{
    /**
     * App场景预约扣费类型签约的预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/scheduled-deduct-sign/contracts/pre-entrust-sign/app
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'contract_display_account' => '微信代扣用户A',
            'contract_notify_url' => 'https://yourapp.com/notify',
            'out_user_code' => '用户A',
            'deduct_schedule' => [
                'estimated_deduct_date' => '2019-11-22',
                'estimated_deduct_amount' => [
                    'total' => 1,
                    'currency' => 'CNY',
                ],
                'description' => '小乔-碎云皮肤（微信83区沧海之耀）',
            ],
        ],
    ]): ResponseInterface;

    /**
     * App场景预约扣费类型签约的预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/scheduled-deduct-sign/contracts/pre-entrust-sign/app
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'contract_display_account' => '微信代扣用户A',
            'contract_notify_url' => 'https://yourapp.com/notify',
            'out_user_code' => '用户A',
            'deduct_schedule' => [
                'estimated_deduct_date' => '2019-11-22',
                'estimated_deduct_amount' => [
                    'total' => 1,
                    'currency' => 'CNY',
                ],
                'description' => '小乔-碎云皮肤（微信83区沧海之耀）',
            ],
        ],
    ]): PromiseInterface;
}
