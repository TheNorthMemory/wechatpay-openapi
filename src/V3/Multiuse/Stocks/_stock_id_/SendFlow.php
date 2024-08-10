<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Multiuse\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SendFlow
{
    /**
     * 下载批次发放明细(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/multiuse-coupon/stock/send-flow.html
     */
    public function get(array $options = [
        'stock_id' => '9856888',
    ]): ResponseInterface;

    /**
     * 下载批次发放明细(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/multiuse-coupon/stock/send-flow.html#async
     */
    public function getAsync(array $options = [
        'stock_id' => '9856888',
    ]): PromiseInterface;
}
