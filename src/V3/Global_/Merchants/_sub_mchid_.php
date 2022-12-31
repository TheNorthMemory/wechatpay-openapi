<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 查询子商户（融合钱包）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_2_2.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'sub_mchid' => '20000100',
        'query' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
        ],
    ]): ResponseInterface;

    /**
     * 查询子商户（融合钱包）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_2_2.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'sub_mchid' => '20000100',
        'query' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
        ],
    ]): PromiseInterface;
}
