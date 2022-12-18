<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Qrcode\UserServices\ContractId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _contract_id_
{
    /**
     * 查询用户服务可用信息(同步模式)
     * @param array<string,mixed> $options
     * @link 在商户生成乘车码前，商户请求查询用户服务可用信息接口，查询 用户服务可用信息，通过用户服务可用信息中的服务可用状态，来判断是否可以正常使用公共出行代扣服务
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
     * @link 在商户生成乘车码前，商户请求查询用户服务可用信息接口，查询 用户服务可用信息，通过用户服务可用信息中的服务可用状态，来判断是否可以正常使用公共出行代扣服务#async
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
