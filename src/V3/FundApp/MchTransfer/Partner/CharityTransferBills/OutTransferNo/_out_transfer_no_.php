<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner\CharityTransferBills\OutTransferNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_transfer_no_
{
    /**
     * 商户单号查询公益捐赠详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-transfer-bills/out-transfer-no/%7Bout_transfer_no%7D
     */
    public function get(array $options = [
        'out_transfer_no' => 'trans202506300102',
        'query' => [
            'sponsor_mchid' => '1900001109',
            'out_budget_no' => 'budget202506030102',
        ],
    ]): ResponseInterface;

    /**
     * 商户单号查询公益捐赠详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-transfer-bills/out-transfer-no/%7Bout_transfer_no%7D
     */
    public function getAsync(array $options = [
        'out_transfer_no' => 'trans202506300102',
        'query' => [
            'sponsor_mchid' => '1900001109',
            'out_budget_no' => 'budget202506030102',
        ],
    ]): PromiseInterface;
}
