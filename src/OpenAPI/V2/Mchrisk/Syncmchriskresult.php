<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mchrisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Syncmchriskresult
{
    /**
     * 事后-风险商户处理结果同步接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_291
     */
    public function post(array $options = [
        'xml' => [
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 事后-风险商户处理结果同步接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_291#async
     */
    public function postAsync(array $options = [
        'xml' => [
        ],
        'security' => true,
    ]): PromiseInterface;
}
