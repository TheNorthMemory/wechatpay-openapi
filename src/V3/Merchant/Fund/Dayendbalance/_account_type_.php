<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund\Dayendbalance;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _account_type_
{
    /**
     * 查询账户日终余额(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-balance/accounts/query-day-end-balance.html
     */
    public function get(array $options = [
        'account_type' => 'BASIC | OPERATION | FEES',
        'query' => [
            'bill_date' => '2019-06-11',
        ],
    ]): ResponseInterface;

    /**
     * 查询账户日终余额(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-balance/accounts/query-day-end-balance.html#async
     */
    public function getAsync(array $options = [
        'account_type' => 'BASIC | OPERATION | FEES',
        'query' => [
            'bill_date' => '2019-06-11',
        ],
    ]): PromiseInterface;
}
