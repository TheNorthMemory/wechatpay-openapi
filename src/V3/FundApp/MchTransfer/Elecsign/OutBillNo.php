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
     * @link https://pay.weixin.qq.com/docs/merchant/apis/mch-trans/elecsign/accept-elecsign-by-out-no.html
     */
    public function post(array $options = [
        'json' => [
            'out_bill_no' => 'plfk2020042013',
        ],
    ]): ResponseInterface;

    /**
     * 商户单号申请电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/mch-trans/elecsign/accept-elecsign-by-out-no.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_bill_no' => 'plfk2020042013',
        ],
    ]): PromiseInterface;
}
