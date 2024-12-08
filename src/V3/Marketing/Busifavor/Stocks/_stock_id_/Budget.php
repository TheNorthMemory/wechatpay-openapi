<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Budget
{
    /**
     * 修改批次预算(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/stocks/%7Bstock_id%7D/budget
     */
    public function patch(array $options = [
        'stock_id' => '98065001',
        'json' => [
            'target_max_coupons' => 3000,
            'target_max_coupons_by_day' => 0,
            'current_max_coupons' => 500,
            'current_max_coupons_by_day' => 300,
            'modify_budget_request_no' => '1002600620019090123143254436',
        ],
    ]): ResponseInterface;

    /**
     * 修改批次预算(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/stocks/%7Bstock_id%7D/budget
     */
    public function patchAsync(array $options = [
        'stock_id' => '98065001',
        'json' => [
            'target_max_coupons' => 3000,
            'target_max_coupons_by_day' => 0,
            'current_max_coupons' => 500,
            'current_max_coupons_by_day' => 300,
            'modify_budget_request_no' => '1002600620019090123143254436',
        ],
    ]): PromiseInterface;
}
