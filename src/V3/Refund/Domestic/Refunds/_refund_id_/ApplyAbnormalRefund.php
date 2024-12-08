<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Refund\Domestic\Refunds\_refund_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ApplyAbnormalRefund
{
    /**
     * 发起异常退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/refund/domestic/refunds/%7Brefund_id%7D/apply-abnormal-refund
     */
    public function post(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'json' => [
            'sub_mchid' => '1900000109',
            'out_refund_no' => '1217752501201407033233368018',
            'type' => 'USER_BANK_CARD | MERCHANT_BANK_CARD',
            'bank_type' => 'CMB_DEBIT | COMM_DEBIT | ABC_DEBIT | CCB_DEBIT',
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
     * @link https://wechatpay.im/openapi/v3/refund/domestic/refunds/%7Brefund_id%7D/apply-abnormal-refund
     */
    public function postAsync(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'json' => [
            'sub_mchid' => '1900000109',
            'out_refund_no' => '1217752501201407033233368018',
            'type' => 'USER_BANK_CARD | MERCHANT_BANK_CARD',
            'bank_type' => 'CMB_DEBIT | COMM_DEBIT | ABC_DEBIT | CCB_DEBIT',
            'bank_account' => 'd+xT+MQCvrLHUVDWv/8MR/dB7TkXLVfSrUxMPZy6jWWYzpRrEEaYQE8ZRGYoeorwC+w==',
            'real_name' => 'UPgQcZSdq3zOayJwZ5XLrHY2dZU1W2Cd',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
