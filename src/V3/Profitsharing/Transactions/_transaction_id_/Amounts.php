<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing\Transactions\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Amounts
{
    /**
     * 查询剩余待分金额(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_6.shtml
     */
    public function get(array $options = [
        'transaction_id' => '4208450740201411110007820472',
    ]): ResponseInterface;

    /**
     * 查询剩余待分金额(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_6.shtml#async
     */
    public function getAsync(array $options = [
        'transaction_id' => '4208450740201411110007820472',
    ]): PromiseInterface;
}
