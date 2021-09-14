<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Pappayapply
{
    /**
     * 申请扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_3&index=8
     */
    public function post(array $options = [
        'xml' => [
        ],
    ]): ResponseInterface;

    /**
     * 申请扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/pap.php?chapter=18_3&index=8#async
     */
    public function postAsync(array $options = [
        'xml' => [
        ],
    ]): PromiseInterface;
}
