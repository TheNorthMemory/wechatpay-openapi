<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Account\ApplyCancelWithdraw;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Confirm
{
    /**
     * 平台代商户确认注销(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw/confirm
     */
    public function post(array $options = [
        'json' => [
            'applyment_id' => 'X202410241010125346',
            'out_request_no' => 'P202410241010125346',
            'sub_mchid' => '1900000109',
            'confirm_time' => '2015-05-20T13:29:35.120+08:00',
            'cancel_contract_version' => 'V20241213',
        ],
    ]): ResponseInterface;

    /**
     * 平台代商户确认注销(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw/confirm
     */
    public function postAsync(array $options = [
        'json' => [
            'applyment_id' => 'X202410241010125346',
            'out_request_no' => 'P202410241010125346',
            'sub_mchid' => '1900000109',
            'confirm_time' => '2015-05-20T13:29:35.120+08:00',
            'cancel_contract_version' => 'V20241213',
        ],
    ]): PromiseInterface;
}
