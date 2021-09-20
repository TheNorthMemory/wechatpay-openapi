<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mkt;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Addrecommendconf
{
    /**
     * 服务商特约商户关注功能配置(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_24_1&index=1&p=901
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'sub_appid' => 'wx8888888888888888',
            'subscribe_appid' => 'wx931386123456789e',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 服务商特约商户关注功能配置(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_24_1&index=1&p=901#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'sub_appid' => 'wx8888888888888888',
            'subscribe_appid' => 'wx931386123456789e',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): PromiseInterface;
}
