<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Applyment\Micro;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Signcontract
{
    /**
     * 签约报备(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.05.23
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=19_4
     */
    public function post(array $options = [
        'xml' => [
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 签约报备(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.05.23
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=19_4#async
     */
    public function postAsync(array $options = [
        'xml' => [
        ],
        'security' => true,
    ]): PromiseInterface;
}
