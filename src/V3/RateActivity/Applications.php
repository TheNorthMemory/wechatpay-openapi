<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\RateActivity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Applications\Id $id
 */
interface Applications
{
    /**
     * 报名费率优惠活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/rateactivity/chapter3_1.shtml
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
                    'apply_material_information' => ['MediaId'],
                ],],
            ],
            'additional_information' => [
                'additional_message' => '特殊情况，说明原因',
                'additional_material' => ['MediaId'],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 报名费率优惠活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/rateactivity/chapter3_1.shtml#async
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
                    'apply_material_information' => ['MediaId'],
                ],],
            ],
            'additional_information' => [
                'additional_message' => '特殊情况，说明原因',
                'additional_material' => ['MediaId'],
            ],
        ],
    ]): PromiseInterface;
}
