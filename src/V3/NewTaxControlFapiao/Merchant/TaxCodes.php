<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Merchant;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface TaxCodes
{
    /**
     * 获取商品和服务税收分类对照表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/merchant/tax-codes
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'offset' => 0,
            'limit' => 5,
        ],
    ]): ResponseInterface;

    /**
     * 获取商品和服务税收分类对照表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/merchant/tax-codes
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'offset' => 0,
            'limit' => 5,
        ],
    ]): PromiseInterface;
}
