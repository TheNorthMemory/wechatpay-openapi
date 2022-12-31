<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Refund
{
    /**
     * 申请退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://share.weiyun.com/5dxUgCw
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'transaction_id' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'total_fee' => '100',
            'refund_fee' => '100',
            'refund_fee_type' => 'CNY',
            'refund_desc' => '商品已售完',
            'refund_account' => 'REFUND_SOURCE_RECHARGE_FUNDS',
            'notify_url' => 'https://weixin.qq.com/notify/',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 申请退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://share.weiyun.com/5dxUgCw#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'transaction_id' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'total_fee' => '100',
            'refund_fee' => '100',
            'refund_fee_type' => 'CNY',
            'refund_desc' => '商品已售完',
            'refund_account' => 'REFUND_SOURCE_RECHARGE_FUNDS',
            'notify_url' => 'https://weixin.qq.com/notify/',
        ],
        'security' => true,
    ]): PromiseInterface;
}
