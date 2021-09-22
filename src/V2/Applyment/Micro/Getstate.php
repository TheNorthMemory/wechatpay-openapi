<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Applyment\Micro;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Getstate
{
    /**
     * 查询申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=19_3
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'applyment_id' => '1230000109',
            'business_code' => '123456',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=19_3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'applyment_id' => '1230000109',
            'business_code' => '123456',
        ],
        'security' => true,
    ]): PromiseInterface;
}
