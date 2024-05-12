<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface App
{
    /**
     * 合单下单-APP支付(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'combine_mchid' => '1900000109',
            'combine_out_trade_no' => 'P20150806125346',
            'scene_info' => [
                'device_id' => 'POS1:1',
                'payer_client_ip' => '14.17.22.32',
            ],
            'sub_orders' => [[
                'mchid' => '1900000109',
                'attach' => '深圳分店',
                'amount' => [
                    'total_amount' => 100,
                    'currency' => 'CNY',
                ],
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
                'detail' => '买单费用',
                'goods_tag' => 'WXG',
                'description' => '腾讯充值中心-QQ会员充值',
                'settle_info' => [
                    'profit_sharing' => true,
                    'subsidy_amount' => 10,
                ],
                'sub_appid' => 'wxd678efh567hg6999',
            ],],
            'combine_payer_info' => [
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
            'time_start' => '2019-12-31T15:59:60+08:00',
            'time_expire' => '2019-12-31T15:59:60+08:00',
            'notify_url' => 'https://yourapp.com/notify',
            'limit_pay' => ['string'],
            'contract_info' => [
                'mchid' => '1900000109',
                'appid' => 'wxd678efh567hg6787',
                'out_contract_code' => 'wxwtdk20200910100000',
                'plan_id' => 12535,
                'contract_display_account' => '微信代扣用户A',
                'notify_url' => 'https://yourapp.com/notify',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 合单下单-APP支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'combine_mchid' => '1900000109',
            'combine_out_trade_no' => 'P20150806125346',
            'scene_info' => [
                'device_id' => 'POS1:1',
                'payer_client_ip' => '14.17.22.32',
            ],
            'sub_orders' => [[
                'mchid' => '1900000109',
                'attach' => '深圳分店',
                'amount' => [
                    'total_amount' => 100,
                    'currency' => 'CNY',
                ],
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
                'detail' => '买单费用',
                'goods_tag' => 'WXG',
                'description' => '腾讯充值中心-QQ会员充值',
                'settle_info' => [
                    'profit_sharing' => true,
                    'subsidy_amount' => 10,
                ],
                'sub_appid' => 'wxd678efh567hg6999',
            ],],
            'combine_payer_info' => [
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
            'time_start' => '2019-12-31T15:59:60+08:00',
            'time_expire' => '2019-12-31T15:59:60+08:00',
            'notify_url' => 'https://yourapp.com/notify',
            'limit_pay' => ['string'],
            'contract_info' => [
                'mchid' => '1900000109',
                'appid' => 'wxd678efh567hg6787',
                'out_contract_code' => 'wxwtdk20200910100000',
                'plan_id' => 12535,
                'contract_display_account' => '微信代扣用户A',
                'notify_url' => 'https://yourapp.com/notify',
            ],
        ],
    ]): PromiseInterface;
}
