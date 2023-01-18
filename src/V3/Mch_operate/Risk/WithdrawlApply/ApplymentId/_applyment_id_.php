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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_8_8.shtml
     */
    public function get(array $options = [
        'applyment_id' => '20220210183333',
    ]): ResponseInterface;

    /**
     * 微信支付提现申请单号查询提现申请单状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_8_8.shtml#async
     */
    public function getAsync(array $options = [
        'applyment_id' => '20220210183333',
    ]): PromiseInterface;
}
