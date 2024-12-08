<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Fund\Withdraw\OutRequestNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 商户提现单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/fund/withdraw/out-request-no/%7Bout_request_no%7D
     */
    public function get(array $options = [
        'out_request_no' => '20190611222222222200000000012122',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 商户提现单号查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/fund/withdraw/out-request-no/%7Bout_request_no%7D
     */
    public function getAsync(array $options = [
        'out_request_no' => '20190611222222222200000000012122',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
