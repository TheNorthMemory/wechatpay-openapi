<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Fund;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Reautowithdrawbydate
{
    /**
     * 重新发起提现(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since unknown
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=21_3
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000109',
            'date' => '20180602',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 重新发起提现(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since unknown
     * @link https://pay.weixin.qq.com/wiki/doc/api/xiaowei.php?chapter=21_3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000109',
            'date' => '20180602',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): PromiseInterface;
}
