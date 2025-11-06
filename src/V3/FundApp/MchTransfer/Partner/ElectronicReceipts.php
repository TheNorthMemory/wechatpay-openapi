<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read ElectronicReceipts\_out_bill_no_ $_out_bill_no_
 */
interface ElectronicReceipts
{
    /**
     * 申请单笔转账电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/electronic-receipts
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900001121',
            'out_bill_no' => 'plfk2020042013',
        ],
    ]): ResponseInterface;

    /**
     * 申请单笔转账电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/electronic-receipts
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900001121',
            'out_bill_no' => 'plfk2020042013',
        ],
    ]): PromiseInterface;
}
