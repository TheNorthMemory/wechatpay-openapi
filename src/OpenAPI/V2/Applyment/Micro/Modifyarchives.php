<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Applyment\Micro;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Modifyarchives
{
    /**
     * 修改结算银行卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=21_2
     */
    public function post(array $options = [
        'xml' => [
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 修改结算银行卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=21_2#async
     */
    public function postAsync(array $options = [
        'xml' => [
        ],
        'security' => true,
    ]): PromiseInterface;
}
