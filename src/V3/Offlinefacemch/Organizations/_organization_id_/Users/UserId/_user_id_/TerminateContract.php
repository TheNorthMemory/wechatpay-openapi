<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlinefacemch\Organizations\_organization_id_\Users\UserId\_user_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface TerminateContract
{
    /**
     * 解除刷脸用户签约关系接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html
     */
    public function post(array $options = [
        'organization_id' => '',
        'use_id' => '',
    ]): ResponseInterface;

    /**
     * 解除刷脸用户签约关系接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html#async
     */
    public function postAsync(array $options = [
        'organization_id' => '',
        'use_id' => '',
    ]): PromiseInterface;
}
