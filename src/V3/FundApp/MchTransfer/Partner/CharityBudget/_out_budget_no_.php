<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner\CharityBudget;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_budget_no_\Unlock $unlock
 */
interface _out_budget_no_
{
    /**
     * 商户单号查询公益捐赠预算详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-budget/%7Bout_budget_no%7D
     */
    public function get(array $options = [
        'out_budget_no' => 'budget202506300102',
        'query' => [
            'sponsor_mchid' => '1900001109',
        ],
    ]): ResponseInterface;

    /**
     * 商户单号查询公益捐赠预算详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-budget/%7Bout_budget_no%7D
     */
    public function getAsync(array $options = [
        'out_budget_no' => 'budget202506300102',
        'query' => [
            'sponsor_mchid' => '1900001109',
        ],
    ]): PromiseInterface;
}
