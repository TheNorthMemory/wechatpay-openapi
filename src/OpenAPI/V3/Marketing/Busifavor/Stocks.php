<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Stocks\_stock_id_ $_stock_id_
 */
interface Stocks
{
    /**
     * 创建商家券(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'stock_name' => '8月1日活动券',
            'belong_merchant' => '10000022',
            'comment' => '活动使用',
            'goods_name' => 'xxx商品使用',
            'stock_type' => 'NORMAL',
            'coupon_use_rule' => [],
            'stock_send_rule' => [],
            'out_request_no' => '100002322019090134234sfdf',
            'custom_entrance' => [],
            'display_pattern_info' => [],
            'coupon_code_mode' => 'WECHATPAY_MODE',
            'notify_config' => [],
            'subsidy' => '',
        ],
    ]): ResponseInterface;

    /**
     * 创建商家券(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'stock_name' => '8月1日活动券',
            'belong_merchant' => '10000022',
            'comment' => '活动使用',
            'goods_name' => 'xxx商品使用',
            'stock_type' => 'NORMAL',
            'coupon_use_rule' => [],
            'stock_send_rule' => [],
            'out_request_no' => '100002322019090134234sfdf',
            'custom_entrance' => [],
            'display_pattern_info' => [],
            'coupon_code_mode' => 'WECHATPAY_MODE',
            'notify_config' => [],
            'subsidy' => '',
        ],
    ]): PromiseInterface;
}
