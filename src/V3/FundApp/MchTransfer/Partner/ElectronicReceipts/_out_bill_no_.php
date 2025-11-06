<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner\ElectronicReceipts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_bill_no_
{
    /**
     * 查询单笔转账电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/electronic-receipts/%7Bout_bill_no%7D
     */
    public function get(array $options = [
        'out_bill_no' => 'plfk2020042013',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): ResponseInterface;

    /**
     * 查询单笔转账电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/electronic-receipts/%7Bout_bill_no%7D
     */
    public function getAsync(array $options = [
        'out_bill_no' => 'plfk2020042013',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): PromiseInterface;
}
