<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchantfund\Merchant;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface IncomeRecords
{
    /**
     * 服务商银行来账查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchantfund/merchant/income-records
     */
    public function get(array $options = [
        'query' => [
            'account_type' => 'BASIC',
            'date' => '2019-06-11',
            'offset' => 0,
            'limit' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 服务商银行来账查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchantfund/merchant/income-records
     */
    public function getAsync(array $options = [
        'query' => [
            'account_type' => 'BASIC',
            'date' => '2019-06-11',
            'offset' => 0,
            'limit' => 100,
        ],
    ]): PromiseInterface;
}
