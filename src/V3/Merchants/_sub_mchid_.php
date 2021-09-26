<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _sub_mchid_
{
    /**
     * 查询子商户（融合钱包）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/Onborading_Sub_Merchant/chapter3_2.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'sub_mchid' => '20000100',
        'query' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
        ],
    ]): ResponseInterface;

    /**
     * 查询子商户（融合钱包）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/Onborading_Sub_Merchant/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'sub_mchid' => '20000100',
        'query' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
        ],
    ]): PromiseInterface;
}
