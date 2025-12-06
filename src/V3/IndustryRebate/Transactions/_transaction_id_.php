<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\IndustryRebate\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _transaction_id_
{
    /**
     * 支付码牌/点餐码牌交易回传(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/industry-rebate/transactions/%7Btransaction_id%7D
     */
    public function post(array $options = [
        'transaction_id' => '20190611222222222200000000012122',
        'json' => [
            'sub_mchid' => '1900000001',
            'code_url' => 'URl:weixin://wxpay/s/An4baqw',
            'out_trade_no' => 'example_out_trade_no',
        ],
    ]): ResponseInterface;

    /**
     * 支付码牌/点餐码牌交易回传(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/industry-rebate/transactions/%7Btransaction_id%7D
     */
    public function postAsync(array $options = [
        'transaction_id' => '20190611222222222200000000012122',
        'json' => [
            'sub_mchid' => '1900000001',
            'code_url' => 'URl:weixin://wxpay/s/An4baqw',
            'out_trade_no' => 'example_out_trade_no',
        ],
    ]): PromiseInterface;
}
