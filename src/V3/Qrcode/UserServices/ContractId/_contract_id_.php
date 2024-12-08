<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Qrcode\UserServices\ContractId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _contract_id_
{
    /**
     * 查询用户服务可用信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/qrcode/user-services/contract-id/%7Bcontract_id%7D
     */
    public function get(array $options = [
        'contract_id' => 'Wx15463511252015071056489715',
        'query' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165486',
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户服务可用信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/qrcode/user-services/contract-id/%7Bcontract_id%7D
     */
    public function getAsync(array $options = [
        'contract_id' => 'Wx15463511252015071056489715',
        'query' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165486',
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
