<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduPapay\User\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Contracts
{
    /**
     * 通过用户标识查询签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-papay/user/%7Bopenid%7D/contracts
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'sub_openid' => 'oUpF8uMuAJOM2pxb1Q',
            'plan_id' => '101164396123311331',
            'contract_status' => 'ADD',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 通过用户标识查询签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-papay/user/%7Bopenid%7D/contracts
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'sub_openid' => 'oUpF8uMuAJOM2pxb1Q',
            'plan_id' => '101164396123311331',
            'contract_status' => 'ADD',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
