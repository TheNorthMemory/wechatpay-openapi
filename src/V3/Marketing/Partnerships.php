<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Partnerships\Build $build
 * @property-read Partnerships\Terminate $terminate
 */
interface Partnerships
{
    /**
     * 查询合作关系列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_5_3.shtml
     */
    public function get(array $options = [
        'query' => [
            'partner' => '{"type":"APPID","appid":"wx4e1916a585d1f4e9"}',
            'authorized_data' => '{"business_type":"FAVOR_STOCK","stock_id":"2433405"}',
            'limit' => 50,
            'offset' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 查询合作关系列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_5_3.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'partner' => '{"type":"APPID","appid":"wx4e1916a585d1f4e9"}',
            'authorized_data' => '{"business_type":"FAVOR_STOCK","stock_id":"2433405"}',
            'limit' => 50,
            'offset' => 0,
        ],
    ]): PromiseInterface;
}
