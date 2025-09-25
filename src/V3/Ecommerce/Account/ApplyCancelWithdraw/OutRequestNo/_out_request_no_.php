<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Account\ApplyCancelWithdraw\OutRequestNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 商户注销提现申请单号查询申请单状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw/out-request-no/%7Bout_request_no%7D
     */
    public function get(array $options = [
        'out_request_no' => 'P202410241010125346',
    ]): ResponseInterface;

    /**
     * 商户注销提现申请单号查询申请单状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw/out-request-no/%7Bout_request_no%7D
     */
    public function getAsync(array $options = [
        'out_request_no' => 'P202410241010125346',
    ]): PromiseInterface;
}
