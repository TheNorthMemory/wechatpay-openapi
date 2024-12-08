<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Fund\Balance;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 查询二级商户账户实时余额(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/fund/balance/%7Bsub_mchid%7D
     */
    public function get(array $options = [
        'sub_mchid' => '1900000109',
        'query' => [
            'account_type' => 'BASIC | OPERATION | FEES | DEPOSIT',
        ],
    ]): ResponseInterface;

    /**
     * 查询二级商户账户实时余额(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/fund/balance/%7Bsub_mchid%7D
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900000109',
        'query' => [
            'account_type' => 'BASIC | OPERATION | FEES | DEPOSIT',
        ],
    ]): PromiseInterface;
}
