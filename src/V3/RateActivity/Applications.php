<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\RateActivity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Applications\Id $id
 */
interface Applications
{
    /**
     * 报名费率优惠活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/rate-activity/applications
     */
    public function post(array $options = [
        'json' => [
            'acquiring_bank_id' => '1356485',
            'channel_id' => '20001111',
            'sub_mchid' => '1346578',
            'activity_detail' => [
                'activity_id' => 'schoolcanteen_001',
                'activity_rate' => '0.6',
                'activity_apply_information' => [[
                    'apply_material_id' => 'SCHOOL_QUALIFICATION_PROVEMENT',
                    'apply_material_information' => ['0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjm'],
                ],],
            ],
            'additional_information' => [
                'additional_message' => '特殊情况，说明原因',
                'additional_material' => ['0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjm'],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 报名费率优惠活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/rate-activity/applications
     */
    public function postAsync(array $options = [
        'json' => [
            'acquiring_bank_id' => '1356485',
            'channel_id' => '20001111',
            'sub_mchid' => '1346578',
            'activity_detail' => [
                'activity_id' => 'schoolcanteen_001',
                'activity_rate' => '0.6',
                'activity_apply_information' => [[
                    'apply_material_id' => 'SCHOOL_QUALIFICATION_PROVEMENT',
                    'apply_material_information' => ['0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjm'],
                ],],
            ],
            'additional_information' => [
                'additional_message' => '特殊情况，说明原因',
                'additional_material' => ['0P3ng6KTIW4-Q_l2FjKLZuhHjBWoMAjm'],
            ],
        ],
    ]): PromiseInterface;
}
