<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund\Withdraw\OutRequestNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 电商平台(商户提现单号查询)提现状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_6.shtml
     */
    public function get(array $options = [
        'out_request_no' => '20190611222222222200000000012122',
    ]): ResponseInterface;

    /**
     * 电商平台(商户提现单号查询)提现状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_6.shtml#async
     */
    public function getAsync(array $options = [
        'out_request_no' => '20190611222222222200000000012122',
    ]): PromiseInterface;
}
