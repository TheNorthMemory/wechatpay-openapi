<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\MembershipActivities;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _activity_id_\Terminate $terminate
 */
interface _activity_id_
{
    /**
     * 修改品牌会员发券活动信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities/%7Bactivity_id%7D
     */
    public function patch(array $options = [
        'activity_id' => '371067',
        'json' => [
            'brand_id' => '1004',
            'title' => '入会享券',
            'sub_title' => '5张满减券',
            'begin_time' => '2020-01-20T13:29:35.120+08:00',
            'end_time' => '2020-01-29T13:29:35.120+08:00',
        ],
    ]): ResponseInterface;

    /**
     * 修改品牌会员发券活动信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities/%7Bactivity_id%7D
     */
    public function patchAsync(array $options = [
        'activity_id' => '371067',
        'json' => [
            'brand_id' => '1004',
            'title' => '入会享券',
            'sub_title' => '5张满减券',
            'begin_time' => '2020-01-20T13:29:35.120+08:00',
            'end_time' => '2020-01-29T13:29:35.120+08:00',
        ],
    ]): PromiseInterface;

    /**
     * 查询品牌会员发券活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities/%7Bactivity_id%7D#get
     */
    public function get(array $options = [
        'activity_id' => '371067',
        'query' => [
            'brand_id' => '1004',
        ],
    ]): ResponseInterface;

    /**
     * 查询品牌会员发券活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities/%7Bactivity_id%7D#get
     */
    public function getAsync(array $options = [
        'activity_id' => '371067',
        'query' => [
            'brand_id' => '1004',
        ],
    ]): PromiseInterface;
}
