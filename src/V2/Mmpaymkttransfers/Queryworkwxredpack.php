<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Queryworkwxredpack
{
    /**
     * 查询红包记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/queryworkwxredpack
     */
    public function post(array $options = [
        'xml' => [
            'mch_billno' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'appid' => 'wxe062425f740d30d8',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询红包记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/queryworkwxredpack
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_billno' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'appid' => 'wxe062425f740d30d8',
        ],
        'security' => true,
    ]): PromiseInterface;
}
