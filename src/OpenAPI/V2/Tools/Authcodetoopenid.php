<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Tools;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Authcodetoopenid
{
    /**
     * 授权码查询openid(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/micropay_sl.php?chapter=9_12&index=8
     */
    public function post(array $options = [
        'xml' => [
            'appid' => '',
            'mch_id' => '',
            'sub_appid' => '',
            'sub_mch_id' => '',
            'auth_code' => '',
            'nonce_str' => '',
            'sign' => '',
        ],
    ]): ResponseInterface;

    /**
     * 授权码查询openid(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/micropay_sl.php?chapter=9_12&index=8#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => '',
            'mch_id' => '',
            'sub_appid' => '',
            'sub_mch_id' => '',
            'auth_code' => '',
            'nonce_str' => '',
            'sign' => '',
        ],
    ]): PromiseInterface;
}
