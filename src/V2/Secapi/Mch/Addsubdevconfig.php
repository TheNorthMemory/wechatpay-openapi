<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Addsubdevconfig
{
    /**
     * 服务商子商户开发配置新增支付目录/新增对应APPID关联(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_24_2&index=2&p=901
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'sub_appid' => 'wx931386123456789e',
            'jsapi_path' => 'http://www.qq.com/wechat/',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 服务商子商户开发配置新增支付目录/新增对应APPID关联(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_24_2&index=2&p=901#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'sub_appid' => 'wx931386123456789e',
            'jsapi_path' => 'http://www.qq.com/wechat/',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}
