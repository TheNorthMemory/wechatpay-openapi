<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PartnerPapay\Contracts\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Notify
{
    /**
     * 服务商商户预扣费通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/partner-papay/contracts/%7Bcontract_id%7D/notify
     */
    public function post(array $options = [
        'contract_id' => '123124412412423431',
        'json' => [
            'sp_mchid' => '1230000109',
            'sp_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '12345512',
            'sub_appid' => 'wxd678efh567hg6787',
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
     * 服务商商户预扣费通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/partner-papay/contracts/%7Bcontract_id%7D/notify
     */
    public function postAsync(array $options = [
        'contract_id' => '123124412412423431',
        'json' => [
            'sp_mchid' => '1230000109',
            'sp_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '12345512',
            'sub_appid' => 'wxd678efh567hg6787',
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
