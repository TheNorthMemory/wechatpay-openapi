<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Bank\Packages\_package_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Tasks
{
    /**
     * 导入定向用户协议号(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_8_1.shtml
     */
    public function post(array $options = [
        'package_id' => '',
    ]): ResponseInterface;

    /**
     * 导入定向用户协议号(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_8_1.shtml#async
     */
    public function postAsync(array $options = [
        'package_id' => '',
    ]): PromiseInterface;
}
