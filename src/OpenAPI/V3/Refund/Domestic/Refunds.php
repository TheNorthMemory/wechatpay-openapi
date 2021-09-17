<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Refund\Domestic;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Refunds\_out_refund_no_ $_out_refund_no_
 */
interface Refunds
{
    /**
     * 申请退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter3_5_9.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'notify_url' => 'https://weixin.qq.com',
            'funds_account' => 'AVAILABLE',
            'amount' => [],
            'goods_detail' => [],
        ],
    ]): ResponseInterface;

    /**
     * 申请退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter3_5_9.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'notify_url' => 'https://weixin.qq.com',
            'funds_account' => 'AVAILABLE',
            'amount' => [],
            'goods_detail' => [],
        ],
    ]): PromiseInterface;
}
