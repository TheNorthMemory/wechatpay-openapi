<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mch_operate\Risk\WithdrawlApply\ApplymentId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _applyment_id_
{
    /**
     * 微信支付提现申请单号查询提现申请单状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch_operate/risk/withdrawl-apply/applyment-id/%7Bapplyment_id%7D
     */
    public function get(array $options = [
        'applyment_id' => '20220210183333',
    ]): ResponseInterface;

    /**
     * 微信支付提现申请单号查询提现申请单状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch_operate/risk/withdrawl-apply/applyment-id/%7Bapplyment_id%7D
     */
    public function getAsync(array $options = [
        'applyment_id' => '20220210183333',
    ]): PromiseInterface;
}
