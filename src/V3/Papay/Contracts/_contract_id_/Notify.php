<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\Contracts\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Notify
{
    /**
     * 直连商户预扣费通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/entrusted-payment/json/deduct-notify.html
     */
    public function post(array $options = [
        'contract_id' => '',
        'json' => [
            'mchid' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
            'deduct_duration' => [
                'count' => 1,
                'unit' => 'DAY',
            ],
            'estimated_amount' => [
                'amount' => 1,
                'currency' => 'CNY',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 直连商户预扣费通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/entrusted-payment/json/deduct-notify.html#async
     */
    public function postAsync(array $options = [
        'contract_id' => '',
        'json' => [
            'mchid' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
            'deduct_duration' => [
                'count' => 1,
                'unit' => 'DAY',
            ],
            'estimated_amount' => [
                'amount' => 1,
                'currency' => 'CNY',
            ],
        ],
    ]): PromiseInterface;
}
