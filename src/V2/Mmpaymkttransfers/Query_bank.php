<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query_bank
{
    /**
     * 查询企业付款银行卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/query_bank
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'partner_trade_no' => '1212121221227',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询企业付款银行卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/query_bank
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'partner_trade_no' => '1212121221227',
        ],
        'security' => true,
    ]): PromiseInterface;
}
