<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Wxv;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Finishrentbill
{
    /**
     * 完结租借订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/wxv/finishrentbill
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '',
            'returned' => 'TRUE',
            'real_end_time' => '20091225091010',
            'service_end_location' => '嗨客时尚主题展餐厅',
            'total_amount' => '40000',
            'rent_fee' => '5800',
            'compensation_fee' => '赔偿金费用和租金金额二者必须填写其中一个。赔偿金费用和赔偿金费用说明必须一起填写，单位：分必须>0，传入表示需要扣赔偿金传入表示需要扣赔偿金物品已归还——用户对物品产生了破坏行为造成的损失费用。物品未归还——未还物品费用。传入为0报错.',
            'compensation_fee_desc' => '充电宝有轻微损坏，赔偿30%押金',
            'finish_ticket' => '',
            'profit_sharing' => 'Y',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 完结租借订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/wxv/finishrentbill
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '',
            'returned' => 'TRUE',
            'real_end_time' => '20091225091010',
            'service_end_location' => '嗨客时尚主题展餐厅',
            'total_amount' => '40000',
            'rent_fee' => '5800',
            'compensation_fee' => '赔偿金费用和租金金额二者必须填写其中一个。赔偿金费用和赔偿金费用说明必须一起填写，单位：分必须>0，传入表示需要扣赔偿金传入表示需要扣赔偿金物品已归还——用户对物品产生了破坏行为造成的损失费用。物品未归还——未还物品费用。传入为0报错.',
            'compensation_fee_desc' => '充电宝有轻微损坏，赔偿30%押金',
            'finish_ticket' => '',
            'profit_sharing' => 'Y',
        ],
        'security' => true,
    ]): PromiseInterface;
}
