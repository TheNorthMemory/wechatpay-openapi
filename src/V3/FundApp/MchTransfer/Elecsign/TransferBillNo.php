<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Elecsign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read TransferBillNo\_transfer_bill_no_ $_transfer_bill_no_
 */
interface TransferBillNo
{
    /**
     * 微信单号申请电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/mch-trans/elecsign/accept-elecsign-by-no.html
     */
    public function post(array $options = [
        'json' => [
            'transfer_bill_no' => '1330000071100999991182020050700019480001',
        ],
    ]): ResponseInterface;

    /**
     * 微信单号申请电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/mch-trans/elecsign/accept-elecsign-by-no.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'transfer_bill_no' => '1330000071100999991182020050700019480001',
        ],
    ]): PromiseInterface;
}
