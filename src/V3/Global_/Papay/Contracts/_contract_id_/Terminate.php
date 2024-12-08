<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Papay\Contracts\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 申请解约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/papay/contracts/%7Bcontract_id%7D/terminate
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'contract_id' => '100005698',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sp_appid' => 'wx8888888888888888',
            'sub_mchid' => '1230000109',
            'sub_appid' => 'wxcbda96de0b165484',
            'termination_note' => '解约原因',
        ],
    ]): ResponseInterface;

    /**
     * 申请解约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/papay/contracts/%7Bcontract_id%7D/terminate
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'contract_id' => '100005698',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sp_appid' => 'wx8888888888888888',
            'sub_mchid' => '1230000109',
            'sub_appid' => 'wxcbda96de0b165484',
            'termination_note' => '解约原因',
        ],
    ]): PromiseInterface;
}
