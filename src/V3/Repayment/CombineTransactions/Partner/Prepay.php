<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Repayment\CombineTransactions\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Prepay
{
    /**
     * 还款下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/repayment/combine-transactions/partner/prepay
     */
    public function post(array $options = [
        'json' => [
            'combine_out_trade_no' => '1217752501201407033233368018',
            'combine_mchid' => '1230000109',
            'sub_orders' => [[
                'mchid' => '1230000109',
                'sub_mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'amount' => [
                    'total_amount' => 10,
                    'currency' => 'CNY',
                ],
                'attach' => '深圳分店',
                'description' => '某某放心借',
                'settle_info' => [
                    'profit_sharing' => true,
                    'subsidy_amount' => 10,
                ],
            ],],
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'notify_url' => 'https://yourapp.com/notify',
            'h5_info' => [
                'combine_appid' => 'wxd678efh567hg6787',
                'payer_client_ip' => '127.0.0.1',
                'type' => 'iOS',
                'app_name' => '王者荣耀',
                'app_url' => 'https://pay.qq.com',
                'bundle_id' => 'com.tencent.wzryiOS',
                'package_name' => 'com.tencent.tmgp.sgame',
            ],
            'app_info' => [
                'combine_appid' => 'wxd678efh567hg6787',
            ],
            'miniprogram_info' => [
                'combine_appid' => 'wxd678efh567hg6787',
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 还款下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/repayment/combine-transactions/partner/prepay
     */
    public function postAsync(array $options = [
        'json' => [
            'combine_out_trade_no' => '1217752501201407033233368018',
            'combine_mchid' => '1230000109',
            'sub_orders' => [[
                'mchid' => '1230000109',
                'sub_mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'amount' => [
                    'total_amount' => 10,
                    'currency' => 'CNY',
                ],
                'attach' => '深圳分店',
                'description' => '某某放心借',
                'settle_info' => [
                    'profit_sharing' => true,
                    'subsidy_amount' => 10,
                ],
            ],],
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'notify_url' => 'https://yourapp.com/notify',
            'h5_info' => [
                'combine_appid' => 'wxd678efh567hg6787',
                'payer_client_ip' => '127.0.0.1',
                'type' => 'iOS',
                'app_name' => '王者荣耀',
                'app_url' => 'https://pay.qq.com',
                'bundle_id' => 'com.tencent.wzryiOS',
                'package_name' => 'com.tencent.tmgp.sgame',
            ],
            'app_info' => [
                'combine_appid' => 'wxd678efh567hg6787',
            ],
            'miniprogram_info' => [
                'combine_appid' => 'wxd678efh567hg6787',
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
        ],
    ]): PromiseInterface;
}
