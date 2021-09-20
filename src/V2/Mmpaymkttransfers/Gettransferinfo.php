<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Gettransferinfo
{
    /**
     * 查询企业向微信用户个人付款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay.php?chapter=14_3
     */
    public function post(array $options = [
        'xml' => [
            'partner_trade_no' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'appid' => 'wxe062425f740d30d8',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询企业向微信用户个人付款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay.php?chapter=14_3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'partner_trade_no' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'appid' => 'wxe062425f740d30d8',
        ],
        'security' => true,
    ]): PromiseInterface;
}
