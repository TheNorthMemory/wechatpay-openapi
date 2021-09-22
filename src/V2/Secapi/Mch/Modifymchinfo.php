<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Modifymchinfo
{
    /**
     * 银行特约商户信息修改(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_27&index=2&p=9
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1230000109',
            'sub_mch_id' => '11111111',
            'merchant_shortname' => '商户简称',
            'service_phone' => '075586010000',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 银行特约商户信息修改(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_27&index=2&p=9#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1230000109',
            'sub_mch_id' => '11111111',
            'merchant_shortname' => '商户简称',
            'service_phone' => '075586010000',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}
