<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Partner\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Scannedpos
{
    /**
     * 扫码支付下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-scannedpos-payment/partner-ap-iv3/parner-scanned-pos-prepay.html
     */
    public function post(array $options = [
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'out_trade_no' => '1217752501201407033233368018',
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'attach' => '自定义数据',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'goods_tag' => 'WXG',
            'support_fapiao' => true,
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'payer' => [
                'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
            'detail' => [
                'cost_price' => 1,
                'invoice_id' => 'wx123',
                'goods_detail' => [[
                    'merchant_goods_id' => '由半角的大小写字母、数字、中划线、下划线中的一种或几种组成',
                    'wechatpay_goods_id' => '微信支付定义的统一商品编号（没有可不传）',
                    'goods_name' => 'iPhone6s 16G',
                    'quantity' => 1,
                    'unit_price' => 528800,
                ],],
            ],
            'scene_info' => [
                'payer_client_ip' => '14.23.150.211',
                'device_id' => '013467007045764',
                'store_info' => [
                    'id' => '0001',
                    'out_id' => 'example_out_id',
                ],
            ],
            'settle_info' => [
                'profit_sharing' => true,
            ],
        ],
    ]): ResponseInterface;

    /**
     * 扫码支付下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-scannedpos-payment/partner-ap-iv3/parner-scanned-pos-prepay.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'out_trade_no' => '1217752501201407033233368018',
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'attach' => '自定义数据',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'goods_tag' => 'WXG',
            'support_fapiao' => true,
            'amount' => [
                'total' => 888,
                'currency' => 'CNY',
            ],
            'payer' => [
                'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
            'detail' => [
                'cost_price' => 1,
                'invoice_id' => 'wx123',
                'goods_detail' => [[
                    'merchant_goods_id' => '由半角的大小写字母、数字、中划线、下划线中的一种或几种组成',
                    'wechatpay_goods_id' => '微信支付定义的统一商品编号（没有可不传）',
                    'goods_name' => 'iPhone6s 16G',
                    'quantity' => 1,
                    'unit_price' => 528800,
                ],],
            ],
            'scene_info' => [
                'payer_client_ip' => '14.23.150.211',
                'device_id' => '013467007045764',
                'store_info' => [
                    'id' => '0001',
                    'out_id' => 'example_out_id',
                ],
            ],
            'settle_info' => [
                'profit_sharing' => true,
            ],
        ],
    ]): PromiseInterface;
}
