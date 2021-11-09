<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Refundv2
{
    /**
     * 申请退款（支持单品）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/danpin.php?chapter=9_103&index=3
     */
    public function post(array $options = [
        'xml' => [
            'detail' => '{"goods_detail":[{"goods_id":"商品编码","wxpay_goods_id":"1001","goods_name":"iPhone6s 16G","refund_amount":528800,"refund_quantity":1,"price":528800},{"goods_id":"商品编码","wxpay_goods_id":"1001","goods_name":"iPhone6s 16G","refund_amount":528800,"refund_quantity":1,"price":608800}]}',
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
     * 申请退款（支持单品）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/danpin.php?chapter=9_103&index=3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'detail' => '{"goods_detail":[{"goods_id":"商品编码","wxpay_goods_id":"1001","goods_name":"iPhone6s 16G","refund_amount":528800,"refund_quantity":1,"price":528800},{"goods_id":"商品编码","wxpay_goods_id":"1001","goods_name":"iPhone6s 16G","refund_amount":528800,"refund_quantity":1,"price":608800}]}',
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
