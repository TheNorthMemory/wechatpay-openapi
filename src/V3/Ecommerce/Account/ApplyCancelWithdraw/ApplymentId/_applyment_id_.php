<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Account\ApplyCancelWithdraw\ApplymentId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _applyment_id_
{
    /**
     * 微信支付注销提现申请单号查询申请单状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw/applyment-id/%7Bapplyment_id%7D
     */
    public function get(array $options = [
        'applyment_id' => 'X202410241010125346',
    ]): ResponseInterface;

    /**
     * 微信支付注销提现申请单号查询申请单状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw/applyment-id/%7Bapplyment_id%7D
     */
    public function getAsync(array $options = [
        'applyment_id' => 'X202410241010125346',
    ]): PromiseInterface;
}
