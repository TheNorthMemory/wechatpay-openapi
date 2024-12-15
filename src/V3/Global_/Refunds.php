<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Refunds\OutRefundNo $outRefundNo
 * @property-read Refunds\Id $id
 */
interface Refunds
{
    /**
     * 申请退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/refunds
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sp_mchid' => '1900000100',
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'amount' => [
                'refund' => 888,
                'total' => 888,
                'currency' => 'CNY',
            ],
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): ResponseInterface;

    /**
     * 申请退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/refunds
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sp_mchid' => '1900000100',
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'amount' => [
                'refund' => 888,
                'total' => 888,
                'currency' => 'CNY',
            ],
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): PromiseInterface;

    /**
     * 查询所有退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/refunds#get
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'query' => [
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '',
            'mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
            'offset' => 0,
            'count' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询所有退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/refunds#get
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'query' => [
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '',
            'mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
            'offset' => 0,
            'count' => 10,
        ],
    ]): PromiseInterface;
}
