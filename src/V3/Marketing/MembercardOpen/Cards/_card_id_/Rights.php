<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Rights
{
    /**
     * 设置会员卡模板权益项(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/rights
     */
    public function patch(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'show_bonus' => true,
            'show_favor' => true,
            'bonus' => [
                'init_bonus' => 100,
                'bonus_value_word' => '我的积分',
                'bonus_cost_title' => '积分兑换',
                'bonus_cost_word' => '500积分=2小时免费停车券',
                'bonus_jump_word' => '更多礼品',
                'bonus_jump_appid' => 'wxea9c30a90fs8d3fe',
                'bonus_jump_path' => '/pages/bonus/bonus',
                'bonus_support_appid' => 'wxea9c30a90fs8d3fe',
                'bonus_support_path' => 'pages/selfbonus/selfbonus',
            ],
            'favor' => [
                'show_coupon' => true,
                'member_price_word' => '周二会员全场八折',
                'member_price_appid' => 'wxea9c30a90fs8d3fe',
                'member_price_path' => 'pages/favor/favor',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 设置会员卡模板权益项(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/rights
     */
    public function patchAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'show_bonus' => true,
            'show_favor' => true,
            'bonus' => [
                'init_bonus' => 100,
                'bonus_value_word' => '我的积分',
                'bonus_cost_title' => '积分兑换',
                'bonus_cost_word' => '500积分=2小时免费停车券',
                'bonus_jump_word' => '更多礼品',
                'bonus_jump_appid' => 'wxea9c30a90fs8d3fe',
                'bonus_jump_path' => '/pages/bonus/bonus',
                'bonus_support_appid' => 'wxea9c30a90fs8d3fe',
                'bonus_support_path' => 'pages/selfbonus/selfbonus',
            ],
            'favor' => [
                'show_coupon' => true,
                'member_price_word' => '周二会员全场八折',
                'member_price_appid' => 'wxea9c30a90fs8d3fe',
                'member_price_path' => 'pages/favor/favor',
            ],
        ],
    ]): PromiseInterface;
}
