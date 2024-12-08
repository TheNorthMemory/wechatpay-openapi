<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard\Cards\_out_card_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AddUserRecords
{
    /**
     * 增加用户记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/discount-card/cards/%7Bout_card_code%7D/add-user-records
     */
    public function post(array $options = [
        'out_card_code' => '6e8369071cd942c0476613f9d1ce9ca3',
        'json' => [
            'card_template_id' => '87789b2f25177433bcbf407e8e471f95',
            'objective_completion_records' => [[
                'objective_completion_serial_no' => '578354545',
                'objective_id' => '123456',
                'completion_time' => '2015-05-20T13:29:35.120+08:00',
                'completion_type' => 'INCREASE',
                'description' => '购买商品',
                'completion_count' => 1,
                'remark' => '特价商品',
            ],],
            'reward_usage_records' => [[
                'reward_usage_serial_no' => '578354',
                'reward_id' => '123456',
                'usage_time' => '2015-05-20T13:29:35.120+08:00',
                'usage_type' => 'INCREASE',
                'description' => '购买商品',
                'usage_count' => 1,
                'amount' => 100,
                'remark' => '特价商品',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 增加用户记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/discount-card/cards/%7Bout_card_code%7D/add-user-records
     */
    public function postAsync(array $options = [
        'out_card_code' => '6e8369071cd942c0476613f9d1ce9ca3',
        'json' => [
            'card_template_id' => '87789b2f25177433bcbf407e8e471f95',
            'objective_completion_records' => [[
                'objective_completion_serial_no' => '578354545',
                'objective_id' => '123456',
                'completion_time' => '2015-05-20T13:29:35.120+08:00',
                'completion_type' => 'INCREASE',
                'description' => '购买商品',
                'completion_count' => 1,
                'remark' => '特价商品',
            ],],
            'reward_usage_records' => [[
                'reward_usage_serial_no' => '578354',
                'reward_id' => '123456',
                'usage_time' => '2015-05-20T13:29:35.120+08:00',
                'usage_type' => 'INCREASE',
                'description' => '购买商品',
                'usage_count' => 1,
                'amount' => 100,
                'remark' => '特价商品',
            ],],
        ],
    ]): PromiseInterface;
}
