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
     * @link https://pay.weixin.qq.com/docs/partner/apis/refund/refunds/create-abnormal-refund.html
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_refund_no' => '1217752501201407033233368018',
            'type' => 'COUPON | DISCOUNT',
            'bank_type' => 'CMB_DEBIT | COMM_DEBIT | ABC_DEBIT | CCB_DEBIT',
            'bank_account' => '',
            'real_name' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 发起异常退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/refund/refunds/create-abnormal-refund.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_refund_no' => '1217752501201407033233368018',
            'type' => 'COUPON | DISCOUNT',
            'bank_type' => 'CMB_DEBIT | COMM_DEBIT | ABC_DEBIT | CCB_DEBIT',
            'bank_account' => '',
            'real_name' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
