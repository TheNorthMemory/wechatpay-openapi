<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CreditRepayment\Partner\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AppPresign
{
    /**
     * APP预签约自动还款协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/contracts/app-presign
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'plan_id' => '123',
            'out_contract_code' => '100001256',
            'display_name' => '*明',
            'contract_notify_url' => 'https://pay.weixin.qq.com',
            'repayment_day' => 1,
            'repayment_amount_limit' => '10000',
            'sub_mchid' => '1000000109',
            'sub_appid' => 'example_sub_appid',
            'real_identity' => [
                'identity_type' => 'REAL_IDENTITY_TYPE_INVALID',
                'identity_id' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj==',
                'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61leeGD7x87j3Ph==',
            ],
            'trade_info' => [
                'out_trade_no' => '1217752501201407033233368018',
                'deduct_amount' => 10000,
                'description' => '信贷还款',
                'attach' => '备注信息',
                'notify_url' => 'https://www.test.com',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * APP预签约自动还款协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/contracts/app-presign
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'plan_id' => '123',
            'out_contract_code' => '100001256',
            'display_name' => '*明',
            'contract_notify_url' => 'https://pay.weixin.qq.com',
            'repayment_day' => 1,
            'repayment_amount_limit' => '10000',
            'sub_mchid' => '1000000109',
            'sub_appid' => 'example_sub_appid',
            'real_identity' => [
                'identity_type' => 'REAL_IDENTITY_TYPE_INVALID',
                'identity_id' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj==',
                'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61leeGD7x87j3Ph==',
            ],
            'trade_info' => [
                'out_trade_no' => '1217752501201407033233368018',
                'deduct_amount' => 10000,
                'description' => '信贷还款',
                'attach' => '备注信息',
                'notify_url' => 'https://www.test.com',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
