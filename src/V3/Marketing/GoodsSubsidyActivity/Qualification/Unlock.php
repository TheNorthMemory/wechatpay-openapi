<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\GoodsSubsidyActivity\Qualification;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Unlock
{
    /**
     * 解锁品牌加价购活动资格(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/qualification/unlock
     */
    public function post(array $options = [
        'json' => [
            'order_information' => [
                'payer_openid' => '',
                'out_trade_no' => '',
                'total_fee' => 0,
                'store_id' => '',
                'store_merchant_id' => '',
            ],
            'qualification_ids' => ['string'],
        ],
    ]): ResponseInterface;

    /**
     * 解锁品牌加价购活动资格(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/goods-subsidy-activity/qualification/unlock
     */
    public function postAsync(array $options = [
        'json' => [
            'order_information' => [
                'payer_openid' => '',
                'out_trade_no' => '',
                'total_fee' => 0,
                'store_id' => '',
                'store_merchant_id' => '',
            ],
            'qualification_ids' => ['string'],
        ],
    ]): PromiseInterface;
}
