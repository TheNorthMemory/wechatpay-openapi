<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4sub\Sub_merchants\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface ModifySettlement
{
    /**
     * 修改结算帐号(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/applyment4sub/chapter3_3.shtml
     */
    public function post(array $options = [
        'sub_mchid' => '',
        'json' => [
            'account_type' => 'ACCOUNT_TYPE_BUSINESS',
            'account_bank' => '工商银行',
            'bank_name' => '施秉县农村信用合作联社城关信用社',
            'bank_branch_id' => '402713354941',
            'account_number' => 'ciphertext',
            'bank_address_code' => '110000',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 修改结算帐号(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/applyment4sub/chapter3_3.shtml#async
     */
    public function postAsync(array $options = [
        'sub_mchid' => '',
        'json' => [
            'account_type' => 'ACCOUNT_TYPE_BUSINESS',
            'account_bank' => '工商银行',
            'bank_name' => '施秉县农村信用合作联社城关信用社',
            'bank_branch_id' => '402713354941',
            'account_number' => 'ciphertext',
            'bank_address_code' => '110000',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
