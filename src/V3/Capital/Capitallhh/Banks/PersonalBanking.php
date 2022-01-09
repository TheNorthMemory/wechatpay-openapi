<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Capital\Capitallhh\Banks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface PersonalBanking
{
    /**
     * 查询支持个人业务的银行列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_2_2.shtml
     */
    public function get(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 200,
        ],
    ]): ResponseInterface;

    /**
     * 查询支持个人业务的银行列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_2_2.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'offset' => 0,
            'limit' => 200,
        ],
    ]): PromiseInterface;
}
