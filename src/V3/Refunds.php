<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Refunds\OutRefundNo $outRefundNo
 * @property-read Refunds\Id $id
 */
interface Refunds
{
    /**
     * 申请退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/QuickPay/chapter8_2.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
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
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): ResponseInterface;

    /**
     * 申请退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/QuickPay/chapter8_2.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
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
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): PromiseInterface;

    /**
     * 查询所有退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/QuickPay/chapter8_4.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
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
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/QuickPay/chapter8_4.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
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
