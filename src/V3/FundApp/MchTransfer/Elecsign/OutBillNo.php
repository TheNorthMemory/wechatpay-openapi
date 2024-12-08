<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Elecsign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read OutBillNo\_out_bill_no_ $_out_bill_no_
 */
interface OutBillNo
{
    /**
     * 商户单号申请电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/elecsign/out-bill-no
     */
    public function post(array $options = [
        'json' => [
            'out_bill_no' => 'plfk2020042013',
        ],
    ]): ResponseInterface;

    /**
     * 商户单号申请电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/elecsign/out-bill-no
     */
    public function postAsync(array $options = [
        'json' => [
            'out_bill_no' => 'plfk2020042013',
        ],
    ]): PromiseInterface;
}
