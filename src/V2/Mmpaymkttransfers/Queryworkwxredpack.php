<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Queryworkwxredpack
{
    /**
     * 查询红包记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://open.work.weixin.qq.com/api/doc/90000/90135/90276
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
     * @link https://open.work.weixin.qq.com/api/doc/90000/90135/90276#async
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
