<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mchrisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Channelquerymchauditinfo
{
    /**
     * 渠道商查询商户审核信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_296
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '999990016',
            'acquiring_bank_id' => '999990017',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 渠道商查询商户审核信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_296#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '999990016',
            'acquiring_bank_id' => '999990017',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
