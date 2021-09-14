<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund\Withdraw\WithdrawId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _withdraw_id_
{
    /**
     * 电商平台(微信支付提现单号)查询提现状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_6.shtml
     */
    public function get(array $options = [
        'withdraw_id' => '',
    ]): ResponseInterface;

    /**
     * 电商平台(微信支付提现单号)查询提现状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_6.shtml#async
     */
    public function getAsync(array $options = [
        'withdraw_id' => '',
    ]): PromiseInterface;
}
