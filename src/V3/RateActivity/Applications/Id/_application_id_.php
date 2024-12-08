<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\RateActivity\Applications\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _application_id_
{
    /**
     * 根据申请单ID查询申请单结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/rate-activity/applications/id/%7Bapplication_id%7D
     */
    public function get(array $options = [
        'application_id' => '20000011111',
    ]): ResponseInterface;

    /**
     * 根据申请单ID查询申请单结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/rate-activity/applications/id/%7Bapplication_id%7D
     */
    public function getAsync(array $options = [
        'application_id' => '20000011111',
    ]): PromiseInterface;

    /**
     * 修改单据信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/rate-activity/applications/id/%7Bapplication_id%7D#patch
     */
    public function patch(array $options = [
        'application_id' => '20000011111',
        'json' => [
            'activity_detail_modification' => [
                'activity_rate' => '0.6',
                'activity_apply_information' => [[
                    'apply_material_id' => 'SCHOOL_QUALIFICATION_PROOF',
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
     * 修改单据信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/rate-activity/applications/id/%7Bapplication_id%7D#patch
     */
    public function patchAsync(array $options = [
        'application_id' => '20000011111',
        'json' => [
            'activity_detail_modification' => [
                'activity_rate' => '0.6',
                'activity_apply_information' => [[
                    'apply_material_id' => 'SCHOOL_QUALIFICATION_PROOF',
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
