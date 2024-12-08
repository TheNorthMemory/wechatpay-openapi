<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Plan;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read PayscorePlans\MerchantPlanNo $merchantPlanNo
 */
interface PayscorePlans
{
    /**
     * 创建支付分计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/plan/payscore-plans
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'plan_name' => '瑜伽课20节',
            'plan_duration' => 300,
            'deduction_quantity' => 10,
            'total_original_price' => 15000,
            'total_actual_price' => 15000,
            'plan_detail_list' => [[
                'original_price' => 15000,
                'plan_discount_description' => '享受九折',
                'actual_price' => 14000,
                'plan_detail_name' => '第八节课',
            ],],
            'merchant_plan_no' => '1234323JKHDFE1243252',
        ],
    ]): ResponseInterface;

    /**
     * 创建支付分计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/plan/payscore-plans
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'plan_name' => '瑜伽课20节',
            'plan_duration' => 300,
            'deduction_quantity' => 10,
            'total_original_price' => 15000,
            'total_actual_price' => 15000,
            'plan_detail_list' => [[
                'original_price' => 15000,
                'plan_discount_description' => '享受九折',
                'actual_price' => 14000,
                'plan_detail_name' => '第八节课',
            ],],
            'merchant_plan_no' => '1234323JKHDFE1243252',
        ],
    ]): PromiseInterface;
}
