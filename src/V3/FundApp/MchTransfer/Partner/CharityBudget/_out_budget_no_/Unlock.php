<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner\CharityBudget\_out_budget_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Unlock
{
    /**
     * 解锁公益捐赠预算(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-budget/%7Bout_budget_no%7D/unlock
     */
    public function post(array $options = [
        'out_budget_no' => 'budget202506300102',
        'json' => [
            'sponsor_mchid' => '1900001109',
            'activity_remark' => '公益活动结束，解锁资金',
        ],
    ]): ResponseInterface;

    /**
     * 解锁公益捐赠预算(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-budget/%7Bout_budget_no%7D/unlock
     */
    public function postAsync(array $options = [
        'out_budget_no' => 'budget202506300102',
        'json' => [
            'sponsor_mchid' => '1900001109',
            'activity_remark' => '公益活动结束，解锁资金',
        ],
    ]): PromiseInterface;
}
