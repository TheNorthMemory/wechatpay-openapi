<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Submchmanage
{
    /**
     * 银行特约商户录入/银行特约商户资料查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_22&index=3&p=9
     */
    public function post(array $options = [
        'security' => true,
        'xml' => [
        ],
        'query' => [
            'action' => '',
        ],
    ]): ResponseInterface;

    /**
     * 银行特约商户录入/银行特约商户资料查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_22&index=3&p=9#async
     */
    public function postAsync(array $options = [
        'security' => true,
        'xml' => [
        ],
        'query' => [
            'action' => '',
        ],
    ]): PromiseInterface;
}
