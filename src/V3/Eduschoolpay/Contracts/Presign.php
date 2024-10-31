<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Eduschoolpay\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Presign
{
    /**
     * 预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/edu/eduschoolpay/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'openid' => 'oUpF8uMuAJOM2pxb1Q',
            'plan_id' => '101164396123311331',
            'user_id' => '20200330tony',
            'school_id' => '18260256813396',
            'out_contract_code' => '20190806125346',
            'contract_mode' => 'LIMIT_BANK_CARD',
            'downgrade_default_contract' => true,
            'identity' => [
                'real_name' => '6TqLAZvNZ4AXLNHLMbjA1yKq2k5krHM09m3tCuR',
                'credential_type' => 'IDENTITY_CARD',
                'id_card_number' => '6TqLAZvNZ4AXLNHLMbjA1yKq2k5krHM09m3tCuR',
            ],
            'bank_card' => [
                'bank_card_no' => '6TqLAZvNZ4AXLNHLMbjA1yKq2k5krHM09m3tCuR',
                'valid_thru' => '08/21',
                'phone' => 'j6PlFRRJ4nvGSbtDZzXbXScACvDSnIny67zk3BgT5uIbK4VfGmcjPBEk2mt5ASZ6UUHB4Gy0IZpbuanF9',
                'bank_type' => 'CMC',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/edu/eduschoolpay/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'openid' => 'oUpF8uMuAJOM2pxb1Q',
            'plan_id' => '101164396123311331',
            'user_id' => '20200330tony',
            'school_id' => '18260256813396',
            'out_contract_code' => '20190806125346',
            'contract_mode' => 'LIMIT_BANK_CARD',
            'downgrade_default_contract' => true,
            'identity' => [
                'real_name' => '6TqLAZvNZ4AXLNHLMbjA1yKq2k5krHM09m3tCuR',
                'credential_type' => 'IDENTITY_CARD',
                'id_card_number' => '6TqLAZvNZ4AXLNHLMbjA1yKq2k5krHM09m3tCuR',
            ],
            'bank_card' => [
                'bank_card_no' => '6TqLAZvNZ4AXLNHLMbjA1yKq2k5krHM09m3tCuR',
                'valid_thru' => '08/21',
                'phone' => 'j6PlFRRJ4nvGSbtDZzXbXScACvDSnIny67zk3BgT5uIbK4VfGmcjPBEk2mt5ASZ6UUHB4Gy0IZpbuanF9',
                'bank_type' => 'CMC',
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
