<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MedIns\Refunds;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Notify
{
    /**
     * 医保退款通知(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/med-ins/refunds/notify
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'med_refund_total_fee' => 45000,
            'med_refund__gov_fee' => 45000,
            'med_refund__self_fee' => 45000,
            'med_refund__other_fee' => 45000,
            'refund_time' => '2018-06-08T10:34:56+08:00',
            'out_refund_no' => 'R202204022005169952975171534816',
        ],
        'query' => [
            'mix_trade_no' => '1217752501201407033233368318',
        ],
    ]): ResponseInterface;

    /**
     * 医保退款通知(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/med-ins/refunds/notify
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'med_refund_total_fee' => 45000,
            'med_refund__gov_fee' => 45000,
            'med_refund__self_fee' => 45000,
            'med_refund__other_fee' => 45000,
            'refund_time' => '2018-06-08T10:34:56+08:00',
            'out_refund_no' => 'R202204022005169952975171534816',
        ],
        'query' => [
            'mix_trade_no' => '1217752501201407033233368318',
        ],
    ]): PromiseInterface;
}
