<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund\Balance;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _account_type_
{
    /**
     * 查询账户实时余额(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-balance/accounts/query-balance.html
     */
    public function get(array $options = [
        'account_type' => 'BASIC | OPERATION | FEES',
    ]): ResponseInterface;

    /**
     * 查询账户实时余额(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-balance/accounts/query-balance.html#async
     */
    public function getAsync(array $options = [
        'account_type' => 'BASIC | OPERATION | FEES',
    ]): PromiseInterface;
}
