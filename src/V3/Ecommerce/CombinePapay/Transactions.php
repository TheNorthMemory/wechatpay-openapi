<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\CombinePapay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Transactions\_combine_out_trade_no_ $_combine_out_trade_no_
 */
interface Transactions
{
    /**
     * 电商合单委托代扣支付(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter5_5_4.shtml
     */
    public function post(array $options = [
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'combine_mchid' => '1900000109',
            'combine_out_trade_no' => 'P20150806125346',
            'contract_id' => '123124412412423431',
            'sub_orders' => [[
                'mchid' => '1900000109',
                'attach' => '深圳分店',
                'amount' => [
                    'total_amount' => 100,
                    'currency' => 'CNY',
                ],
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxd678efh567hg6787',
                'description' => '腾讯充值中心-QQ会员充值',
                'settle_info' => [
                    'profit_sharing' => true,
                    'subsidy_amount' => 10,
                ],
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 电商合单委托代扣支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter5_5_4.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'combine_mchid' => '1900000109',
            'combine_out_trade_no' => 'P20150806125346',
            'contract_id' => '123124412412423431',
            'sub_orders' => [[
                'mchid' => '1900000109',
                'attach' => '深圳分店',
                'amount' => [
                    'total_amount' => 100,
                    'currency' => 'CNY',
                ],
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxd678efh567hg6787',
                'description' => '腾讯充值中心-QQ会员充值',
                'settle_info' => [
                    'profit_sharing' => true,
                    'subsidy_amount' => 10,
                ],
            ],],
        ],
    ]): PromiseInterface;
}
