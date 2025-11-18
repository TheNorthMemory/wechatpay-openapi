<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read MembershipActivities\_activity_id_ $_activity_id_
 */
interface MembershipActivities
{
    /**
     * 创建品牌会员发券活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => '100002322019090134234sfdf',
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_channel' => 'MECHANT_APP_COMPONENT',
            'title' => '入会享券',
            'sub_title' => '5张满减券',
            'begin_time' => '2020-01-20T13:29:35.120+08:00',
            'end_time' => '2020-01-29T13:29:35.120+08:00',
            'apply_total' => 1000,
            'product_coupon_stock_list' => [[
                'product_coupon_id' => '701138812971763025610907319729',
                'stock_id' => '98065001',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 创建品牌会员发券活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => '100002322019090134234sfdf',
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_channel' => 'MECHANT_APP_COMPONENT',
            'title' => '入会享券',
            'sub_title' => '5张满减券',
            'begin_time' => '2020-01-20T13:29:35.120+08:00',
            'end_time' => '2020-01-29T13:29:35.120+08:00',
            'apply_total' => 1000,
            'product_coupon_stock_list' => [[
                'product_coupon_id' => '701138812971763025610907319729',
                'stock_id' => '98065001',
            ],],
        ],
    ]): PromiseInterface;

    /**
     * 查询品牌会员发券活动列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities#get
     */
    public function get(array $options = [
        'query' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_state' => 'MEMBERSHIP_ACTIVITY_CREATED',
            'offset' => 10,
            'limit' => 5,
        ],
    ]): ResponseInterface;

    /**
     * 查询品牌会员发券活动列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities#get
     */
    public function getAsync(array $options = [
        'query' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_state' => 'MEMBERSHIP_ACTIVITY_CREATED',
            'offset' => 10,
            'limit' => 5,
        ],
    ]): PromiseInterface;
}
