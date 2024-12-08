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
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/elecsign/transfer-bill-no
     */
    public function post(array $options = [
        'json' => [
            'transfer_bill_no' => '1330000071100999991182020050700019480001',
        ],
    ]): ResponseInterface;

    /**
     * 微信单号申请电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/elecsign/transfer-bill-no
     */
    public function postAsync(array $options = [
        'json' => [
            'transfer_bill_no' => '1330000071100999991182020050700019480001',
        ],
    ]): PromiseInterface;
}
