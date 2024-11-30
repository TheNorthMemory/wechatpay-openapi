<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Miniprogram
{
    /**
     * 个人收款交易下单-小程序(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/personal-collections/mini-program-prepay.html
     */
    public function post(array $options = [
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'combine_mchid' => '1230000109',
            'combine_out_trade_no' => 'P20150806125346',
            'combine_payer_info' => [
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
            'scene_info' => [
                'device_id' => 'POS1:1',
                'payer_client_ip' => '127.0.0.1',
            ],
            'sub_orders' => [[
                'mchid' => '1230000109',
                'individual_auth_id' => '1900000109',
                'individual_name' => '哈哈哈小店',
                'out_trade_no' => '20150806125346',
                'amount' => [
                    'total_amount' => 10,
                    'currency' => 'CNY',
                ],
                'attach' => '深圳分店',
                'description' => 'Image形象店-深圳腾大-QQ公仔',
            ],],
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'notify_url' => 'https://yourapp.com/notify',
            'trade_scenario' => 'RECOMMERCE',
        ],
    ]): ResponseInterface;

    /**
     * 个人收款交易下单-小程序(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/personal-collections/mini-program-prepay.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'combine_mchid' => '1230000109',
            'combine_out_trade_no' => 'P20150806125346',
            'combine_payer_info' => [
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
            'scene_info' => [
                'device_id' => 'POS1:1',
                'payer_client_ip' => '127.0.0.1',
            ],
            'sub_orders' => [[
                'mchid' => '1230000109',
                'individual_auth_id' => '1900000109',
                'individual_name' => '哈哈哈小店',
                'out_trade_no' => '20150806125346',
                'amount' => [
                    'total_amount' => 10,
                    'currency' => 'CNY',
                ],
                'attach' => '深圳分店',
                'description' => 'Image形象店-深圳腾大-QQ公仔',
            ],],
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'notify_url' => 'https://yourapp.com/notify',
            'trade_scenario' => 'RECOMMERCE',
        ],
    ]): PromiseInterface;
}
