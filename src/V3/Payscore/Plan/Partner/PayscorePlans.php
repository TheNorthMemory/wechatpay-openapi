<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Plan\Partner;

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
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-payscore-plan/partner-pay-score-plan/create-partner-pay-score-plan.html
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6787',
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
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-payscore-plan/partner-pay-score-plan/create-partner-pay-score-plan.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6787',
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
