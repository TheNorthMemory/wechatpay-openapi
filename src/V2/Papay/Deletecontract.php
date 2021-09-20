<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Deletecontract
{
    /**
     * 申请解约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_4&index=9
     */
    public function post(array $options = [
        'xml' => [
        ],
    ]): ResponseInterface;

    /**
     * 申请解约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_4&index=9#async
     */
    public function postAsync(array $options = [
        'xml' => [
        ],
    ]): PromiseInterface;
}
