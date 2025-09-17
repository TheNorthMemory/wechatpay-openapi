<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Fapiaomerchant;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Getspinviteurl
{
    /**
     * 获取邀请商户开通服务商电子发票能力(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiaomerchant/getspinviteurl
     */
    public function get(array $options = [
        'query' => [
            'operation_type' => 'AUTH_BINDING',
            'fapiao_mode' => 'THIRD_OR_SELF_FAPIAO',
            'fapiao_ability_type_list' => 'BASE_ABILITY',
            'invite_channel' => 'miniprogram',
            'operate_user' => 'mI7HGEJ4Q2B91IGjHZu/Gthm',
            'invite_code' => 'code_20200101_123',
            'sub_mchid' => '1900000109',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 获取邀请商户开通服务商电子发票能力(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiaomerchant/getspinviteurl
     */
    public function getAsync(array $options = [
        'query' => [
            'operation_type' => 'AUTH_BINDING',
            'fapiao_mode' => 'THIRD_OR_SELF_FAPIAO',
            'fapiao_ability_type_list' => 'BASE_ABILITY',
            'invite_channel' => 'miniprogram',
            'operate_user' => 'mI7HGEJ4Q2B91IGjHZu/Gthm',
            'invite_code' => 'code_20200101_123',
            'sub_mchid' => '1900000109',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
