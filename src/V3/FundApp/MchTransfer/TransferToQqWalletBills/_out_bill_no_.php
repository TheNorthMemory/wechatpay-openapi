<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\TransferToQqWalletBills;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_bill_no_\Cancel $cancel
 */
interface _out_bill_no_
{
    /**
     * 查询转账到QQ钱包的结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/transfer-to-qq-wallet-bills/%7Bout_bill_no%7D
     */
    public function get(array $options = [
        'out_bill_no' => 'plfk2020042013',
    ]): ResponseInterface;

    /**
     * 查询转账到QQ钱包的结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/transfer-to-qq-wallet-bills/%7Bout_bill_no%7D
     */
    public function getAsync(array $options = [
        'out_bill_no' => 'plfk2020042013',
    ]): PromiseInterface;
}
