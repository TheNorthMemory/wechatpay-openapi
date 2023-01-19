<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduPapay\Transactions\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _transaction_id_
{
    /**
     * 微信订单号查单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_8.shtml
     */
    public function get(array $options = [
        'transaction_id' => '25012014070332333018',
    ]): ResponseInterface;

    /**
     * 微信订单号查单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_8.shtml#async
     */
    public function getAsync(array $options = [
        'transaction_id' => '25012014070332333018',
    ]): PromiseInterface;
}
