<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Subsidy\ReturnReceipts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _subsidy_return_receipt_id_
{
    /**
     * 查询商家券营销补差回退单详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_21.shtml
     */
    public function get(array $options = [
        'subsidy_return_receipt_id' => '2120200119165100000000000001',
    ]): ResponseInterface;

    /**
     * 查询商家券营销补差回退单详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_21.shtml#async
     */
    public function getAsync(array $options = [
        'subsidy_return_receipt_id' => '2120200119165100000000000001',
    ]): PromiseInterface;
}
