<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Papay\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _contract_id_\Terminate $terminate
 */
interface _contract_id_
{
    /**
     * 代扣协议ID查询签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter5_1_2.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'contract_id' => '100005698',
        'query' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'sub_appid' => 'wxcbda96de0b165484',
            'plan_id' => 123,
        ],
    ]): ResponseInterface;

    /**
     * 代扣协议ID查询签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter5_1_2.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'contract_id' => '100005698',
        'query' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'sub_appid' => 'wxcbda96de0b165484',
            'plan_id' => 123,
        ],
    ]): PromiseInterface;
}
