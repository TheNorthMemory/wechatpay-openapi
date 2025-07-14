<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\Cards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _card_id_\Invalidate $invalidate
 */
interface _card_id_
{
    /**
     * 查询会员卡模板信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/cards/%7Bcard_id%7D
     */
    public function get(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'query' => [
            'brand_id' => '1004',
        ],
    ]): ResponseInterface;

    /**
     * 查询会员卡模板信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/cards/%7Bcard_id%7D
     */
    public function getAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'query' => [
            'brand_id' => '1004',
        ],
    ]): PromiseInterface;

    /**
     * 修改会员卡模板信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/cards/%7Bcard_id%7D#patch
     */
    public function patch(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'brand_id' => '1004',
            'card_title' => '测试卡',
            'card_color' => '#FFFF00',
            'card_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'code_jump_information' => [
                'jump_appid' => 'wxea9c30a90fs8d3fe',
                'jump_path' => '/pages/code/code',
            ],
            'benefits' => '会员折扣、专属价',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/notify.php',
            'need_pinned' => true,
            'need_display_level' => true,
            'init_level' => '白银会员',
            'service_phone' => '010-8877xxxx',
            'legal_agreement' => '商家需在 48 小时内发货，若商品存在质量问题，用户可在 7 天内申请退货。',
            'valid_date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_begin_time' => '2020-05-20T13:29:35.120+08:00',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
            ],
            'points_information' => [
                'jump_appid' => 'wxea9c30a90fs8d3fe',
                'jump_path' => '/pages/points/points',
            ],
            'balance_information' => [
                'jump_appid' => 'wxea9c30a90fs8d3fe',
                'jump_path' => '/pages/balance/balance',
            ],
            'purchase_information' => [
                'price' => 100,
                'jump_appid' => 'wxea9c30a90fs8d3fe',
                'jump_path' => '/pages/purchase/purchase',
            ],
            'user_information' => [
                'common_field_list' => ['USER_FORM_FLAG_SEX'],
                'custom_field_list' => [[
                    'type' => 'CHECK_BOX | RADIO',
                    'name' => '喜欢的运动',
                    'values' => ['篮球'],
                ],],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 修改会员卡模板信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/cards/%7Bcard_id%7D#patch
     */
    public function patchAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'brand_id' => '1004',
            'card_title' => '测试卡',
            'card_color' => '#FFFF00',
            'card_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'code_jump_information' => [
                'jump_appid' => 'wxea9c30a90fs8d3fe',
                'jump_path' => '/pages/code/code',
            ],
            'benefits' => '会员折扣、专属价',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/notify.php',
            'need_pinned' => true,
            'need_display_level' => true,
            'init_level' => '白银会员',
            'service_phone' => '010-8877xxxx',
            'legal_agreement' => '商家需在 48 小时内发货，若商品存在质量问题，用户可在 7 天内申请退货。',
            'valid_date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_begin_time' => '2020-05-20T13:29:35.120+08:00',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
            ],
            'points_information' => [
                'jump_appid' => 'wxea9c30a90fs8d3fe',
                'jump_path' => '/pages/points/points',
            ],
            'balance_information' => [
                'jump_appid' => 'wxea9c30a90fs8d3fe',
                'jump_path' => '/pages/balance/balance',
            ],
            'purchase_information' => [
                'price' => 100,
                'jump_appid' => 'wxea9c30a90fs8d3fe',
                'jump_path' => '/pages/purchase/purchase',
            ],
            'user_information' => [
                'common_field_list' => ['USER_FORM_FLAG_SEX'],
                'custom_field_list' => [[
                    'type' => 'CHECK_BOX | RADIO',
                    'name' => '喜欢的运动',
                    'values' => ['篮球'],
                ],],
            ],
        ],
    ]): PromiseInterface;

    /**
     * 删除会员卡模板(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/cards/%7Bcard_id%7D#delete
     */
    public function delete(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'query' => [
            'brand_id' => '1004',
        ],
    ]): ResponseInterface;

    /**
     * 删除会员卡模板(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/cards/%7Bcard_id%7D#delete
     */
    public function deleteAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'query' => [
            'brand_id' => '1004',
        ],
    ]): PromiseInterface;
}
