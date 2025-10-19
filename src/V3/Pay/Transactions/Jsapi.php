<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Jsapi
{
    /**
     * JSAPI下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/jsapi
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'attach' => '自定义数据',
            'out_trade_no' => '1217752501201407033233368018',
            'amount' => [
                'total' => 100,
                'currency' => 'CNY',
            ],
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'goods_tag' => 'WXG',
            'limit_pay' => ['no_balance'],
            'support_fapiao' => true,
            'detail' => [
                'cost_price' => 608800,
                'invoice_id' => '微信123',
                'goods_detail' => [[
                    'merchant_goods_id' => '商品编码',
                    'wechatpay_goods_id' => '1001',
                    'goods_name' => 'iPhoneX 256G',
                    'quantity' => 1,
                    'unit_price' => 828800,
                ],],
            ],
            'scene_info' => [
                'payer_client_ip' => '14.23.150.211',
                'device_id' => '013467007045764',
                'store_info' => [
                    'id' => '0001',
                    'name' => '腾讯大厦分店',
                    'area_code' => '440305',
                    'address' => '广东省深圳市南山区科技中一道10000号',
                ],
            ],
            'payer' => [
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'identity' => [
                    'type' => 'IDCARD | HONGKONG_MACAO | HONGKONG_MACAO_RESIDENT | TAIWAN_RESIDENT',
                    'number' => '6B46824C852FA29AAC3DCE6BFD852E27',
                    'name' => '6B46824C852FA29AAC3DCE6BFD852E27',
                ],
            ],
            'settle_info' => [
                'profit_sharing' => true,
            ],
            'subsidy_info' => [
                'subsidy_detail' => [[
                    'subsidy_period_type' => 'PERIOD',
                    'subsidy_plan' => [[
                        'subsidy_installment_num' => 3,
                        'subsidy_percent' => 100,
                    ],],
                ],],
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * JSAPI下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/jsapi
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'attach' => '自定义数据',
            'out_trade_no' => '1217752501201407033233368018',
            'amount' => [
                'total' => 100,
                'currency' => 'CNY',
            ],
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'goods_tag' => 'WXG',
            'limit_pay' => ['no_balance'],
            'support_fapiao' => true,
            'detail' => [
                'cost_price' => 608800,
                'invoice_id' => '微信123',
                'goods_detail' => [[
                    'merchant_goods_id' => '商品编码',
                    'wechatpay_goods_id' => '1001',
                    'goods_name' => 'iPhoneX 256G',
                    'quantity' => 1,
                    'unit_price' => 828800,
                ],],
            ],
            'scene_info' => [
                'payer_client_ip' => '14.23.150.211',
                'device_id' => '013467007045764',
                'store_info' => [
                    'id' => '0001',
                    'name' => '腾讯大厦分店',
                    'area_code' => '440305',
                    'address' => '广东省深圳市南山区科技中一道10000号',
                ],
            ],
            'payer' => [
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'identity' => [
                    'type' => 'IDCARD | HONGKONG_MACAO | HONGKONG_MACAO_RESIDENT | TAIWAN_RESIDENT',
                    'number' => '6B46824C852FA29AAC3DCE6BFD852E27',
                    'name' => '6B46824C852FA29AAC3DCE6BFD852E27',
                ],
            ],
            'settle_info' => [
                'profit_sharing' => true,
            ],
            'subsidy_info' => [
                'subsidy_detail' => [[
                    'subsidy_period_type' => 'PERIOD',
                    'subsidy_plan' => [[
                        'subsidy_installment_num' => 3,
                        'subsidy_percent' => 100,
                    ],],
                ],],
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
