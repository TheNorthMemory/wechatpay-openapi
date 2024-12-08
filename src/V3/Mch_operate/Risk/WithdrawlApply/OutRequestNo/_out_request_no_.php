<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mch_operate\Risk\WithdrawlApply\OutRequestNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 商户提现申请单号查询提现申请单状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch_operate/risk/withdrawl-apply/out-request-no/%7Bout_request_no%7D
     */
    public function get(array $options = [
        'out_request_no' => '123283928932',
    ]): ResponseInterface;

    /**
     * 商户提现申请单号查询提现申请单状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch_operate/risk/withdrawl-apply/out-request-no/%7Bout_request_no%7D
     */
    public function getAsync(array $options = [
        'out_request_no' => '123283928932',
    ]): PromiseInterface;
}
