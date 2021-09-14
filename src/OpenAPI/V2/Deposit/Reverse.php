<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Deposit;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Reverse
{
    /**
     * 撤销订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/deposit_sl.php?chapter=27_3&index=4
     */
    public function post(array $options = [
        'xml' => [
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 撤销订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/deposit_sl.php?chapter=27_3&index=4#async
     */
    public function postAsync(array $options = [
        'xml' => [
        ],
        'security' => true,
    ]): PromiseInterface;
}
