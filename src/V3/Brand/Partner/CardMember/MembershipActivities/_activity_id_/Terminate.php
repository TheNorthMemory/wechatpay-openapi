<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\MembershipActivities\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 终止品牌会员发券活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities/%7Bactivity_id%7D/terminate
     */
    public function post(array $options = [
        'activity_id' => '371067',
        'json' => [
            'brand_id' => '1004',
        ],
    ]): ResponseInterface;

    /**
     * 终止品牌会员发券活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/membership-activities/%7Bactivity_id%7D/terminate
     */
    public function postAsync(array $options = [
        'activity_id' => '371067',
        'json' => [
            'brand_id' => '1004',
        ],
    ]): PromiseInterface;
}
