<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4sub\Sub_merchants\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ModifySettlement
{
    /**
     * 修改结算帐号(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-merchant-application/modify-settlement.html
     */
    public function post(array $options = [
        'sub_mchid' => '1900006491',
        'json' => [
            'modify_mode' => 'MODIFY_MODE_ASYNC',
            'account_type' => 'ACCOUNT_TYPE_BUSINESS',
            'account_bank' => '工商银行',
            'bank_address_code' => '110000',
            'bank_name' => '中国工商银行股份有限公司北京市分行营业部',
            'bank_branch_id' => '402713354941',
            'account_number' => 'ciphertext',
            'account_name' => 'ciphertext',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 修改结算帐号(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-merchant-application/modify-settlement.html#async
     */
    public function postAsync(array $options = [
        'sub_mchid' => '1900006491',
        'json' => [
            'modify_mode' => 'MODIFY_MODE_ASYNC',
            'account_type' => 'ACCOUNT_TYPE_BUSINESS',
            'account_bank' => '工商银行',
            'bank_address_code' => '110000',
            'bank_name' => '中国工商银行股份有限公司北京市分行营业部',
            'bank_branch_id' => '402713354941',
            'account_number' => 'ciphertext',
            'account_name' => 'ciphertext',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
