<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Account;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read CancelApplications\OutApplyNo $outApplyNo
 * @property-read CancelApplications\Media $media
 */
interface CancelApplications
{
    /**
     * 提交注销申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/cancel-applications
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_apply_no' => '2019061122222222122',
            'application_info' => [[
                'application_type' => 'SP_CANCEL_ACCOUNT_APPLICATION | SUB_CANCEL_ACCOUNT_APPLICATION',
                'application_media_id' => '',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 提交注销申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/cancel-applications
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_apply_no' => '2019061122222222122',
            'application_info' => [[
                'application_type' => 'SP_CANCEL_ACCOUNT_APPLICATION | SUB_CANCEL_ACCOUNT_APPLICATION',
                'application_media_id' => '',
            ],],
        ],
    ]): PromiseInterface;
}
