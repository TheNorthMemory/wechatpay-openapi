<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\InsuranceSign\Contracts\PreEntrustSign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Jsapi
{
    /**
     * 保险商户JSAPI预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/insurance-entrusted-payment/insurance/jsapi-sign-and-create-transaction.html
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'insured_display_name' => '*明',
            'contract_notify_url' => 'https://yourapp.com/notify',
            'policy_start_date' => '2019-11-22',
            'policy_end_date' => '2020-11-22',
            'policy_periods' => [[
                'policy_period_id' => 1,
                'estimated_deduct_date' => '2019-11-22',
                'estimated_deduct_amount' => [
                    'total' => 1,
                    'currency' => 'CNY',
                ],
            ],],
            'amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
            'out_trade_no' => '1217752501201407033233368018',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'transaction_notify_url' => 'https://www.qq.com/',
            'out_user_code' => '用户昵称',
            'goods_tag' => 'DISCOUNTS',
            'attach' => '自定义数据',
            'can_auto_insure' => true,
            'can_auto_reinsure' => true,
            'real_identity' => [
                'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61leeGD7x87j3Ph==',
                'id_card_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj==',
                'identity_type' => 'ID_CARD',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 保险商户JSAPI预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/insurance-entrusted-payment/insurance/jsapi-sign-and-create-transaction.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'insured_display_name' => '*明',
            'contract_notify_url' => 'https://yourapp.com/notify',
            'policy_start_date' => '2019-11-22',
            'policy_end_date' => '2020-11-22',
            'policy_periods' => [[
                'policy_period_id' => 1,
                'estimated_deduct_date' => '2019-11-22',
                'estimated_deduct_amount' => [
                    'total' => 1,
                    'currency' => 'CNY',
                ],
            ],],
            'amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
            'out_trade_no' => '1217752501201407033233368018',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'transaction_notify_url' => 'https://www.qq.com/',
            'out_user_code' => '用户昵称',
            'goods_tag' => 'DISCOUNTS',
            'attach' => '自定义数据',
            'can_auto_insure' => true,
            'can_auto_reinsure' => true,
            'real_identity' => [
                'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61leeGD7x87j3Ph==',
                'id_card_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj==',
                'identity_type' => 'ID_CARD',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
