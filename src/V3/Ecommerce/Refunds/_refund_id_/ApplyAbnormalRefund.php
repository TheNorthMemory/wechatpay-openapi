<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Refunds\_refund_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ApplyAbnormalRefund
{
    /**
     * 发起异常退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-refund/refunds/create-abnormal-refund.html
     */
    public function post(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'json' => [
            'sub_mchid' => '1900000109',
            'individual_auth_id' => '1900000109',
            'out_refund_no' => '1217752501201407033233368018',
            'type' => 'USER_BANK_CARD | MERCHANT_BANK_CARD',
            'bank_type' => 'ICBC_DEBIT',
            'bank_account' => 'd+xT+MQCvrLHUVDWv/8MR/dB7TkXLVfSrUxMPZy6jWWYzpRrEEaYQE8ZRGYoeorwC+w==',
            'real_name' => 'UPgQcZSdq3zOayJwZ5XLrHY2dZU1W2Cd',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 发起异常退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-refund/refunds/create-abnormal-refund.html#async
     */
    public function postAsync(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'json' => [
            'sub_mchid' => '1900000109',
            'individual_auth_id' => '1900000109',
            'out_refund_no' => '1217752501201407033233368018',
            'type' => 'USER_BANK_CARD | MERCHANT_BANK_CARD',
            'bank_type' => 'ICBC_DEBIT',
            'bank_account' => 'd+xT+MQCvrLHUVDWv/8MR/dB7TkXLVfSrUxMPZy6jWWYzpRrEEaYQE8ZRGYoeorwC+w==',
            'real_name' => 'UPgQcZSdq3zOayJwZ5XLrHY2dZU1W2Cd',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
