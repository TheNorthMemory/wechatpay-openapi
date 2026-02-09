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
     * @link https://wechatpay.im/openapi/v3/combine-transactions/app
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
                'individual_auth_id' => '1900000109',
                'individual_name' => '哈哈哈小店',
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
                'identity' => [
                    'type' => 'IDCARD',
                    'number' => '6B46824C852FA29AAC3DCE6BFD852E27',
                    'name' => '6B46824C852FA29AAC3DCE6BFD852E27',
                ],
            ],
            'time_start' => '2019-12-31T15:59:60+08:00',
            'time_expire' => '2019-12-31T15:59:60+08:00',
            'prepay_id' => 'wx201410272009395522657a690389285100',
            'notify_url' => 'https://yourapp.com/notify',
            'trade_scenario' => 'RECOMMERCE',
            'limit_pay' => ['no_balance'],
            'contract_info' => [
                'mchid' => '1900000109',
                'appid' => 'wxd678efh567hg6787',
                'out_contract_code' => 'wxwtdk20200910100000',
                'plan_id' => 12535,
                'contract_display_account' => '微信代扣用户A',
                'notify_url' => 'https://yourapp.com/notify',
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
     * 合单下单-APP支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/combine-transactions/app
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
                'individual_auth_id' => '1900000109',
                'individual_name' => '哈哈哈小店',
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
                'identity' => [
                    'type' => 'IDCARD',
                    'number' => '6B46824C852FA29AAC3DCE6BFD852E27',
                    'name' => '6B46824C852FA29AAC3DCE6BFD852E27',
                ],
            ],
            'time_start' => '2019-12-31T15:59:60+08:00',
            'time_expire' => '2019-12-31T15:59:60+08:00',
            'prepay_id' => 'wx201410272009395522657a690389285100',
            'notify_url' => 'https://yourapp.com/notify',
            'trade_scenario' => 'RECOMMERCE',
            'limit_pay' => ['no_balance'],
            'contract_info' => [
                'mchid' => '1900000109',
                'appid' => 'wxd678efh567hg6787',
                'out_contract_code' => 'wxwtdk20200910100000',
                'plan_id' => 12535,
                'contract_display_account' => '微信代扣用户A',
                'notify_url' => 'https://yourapp.com/notify',
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
