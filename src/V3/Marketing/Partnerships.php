<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Partnerships\Build $build
 * @property-read Partnerships\Terminate $terminate
 */
interface Partnerships
{
    /**
     * 查询合作关系列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partnerships
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
     * @link https://wechatpay.im/openapi/v3/marketing/partnerships
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
