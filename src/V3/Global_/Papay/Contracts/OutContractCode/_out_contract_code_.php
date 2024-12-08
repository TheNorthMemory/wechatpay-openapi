<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Papay\Contracts\OutContractCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_contract_code_
{
    /**
     * 商户协议号查询签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/papay/contracts/out-contract-code/%7Bout_contract_code%7D
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'out_contract_code' => '100005698',
        'query' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'sub_appid' => 'wxcbda96de0b165484',
        ],
    ]): ResponseInterface;

    /**
     * 商户协议号查询签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/papay/contracts/out-contract-code/%7Bout_contract_code%7D
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'out_contract_code' => '100005698',
        'query' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'sub_appid' => 'wxcbda96de0b165484',
        ],
    ]): PromiseInterface;
}
