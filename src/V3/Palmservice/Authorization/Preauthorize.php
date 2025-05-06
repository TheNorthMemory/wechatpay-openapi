<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Palmservice\Authorization;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Preauthorize
{
    /**
     * 服务关联预授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/palmservice/authorization/preauthorize
     */
    public function post(array $options = [
        'json' => [
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'preauthorize_session_id' => '181167098309019291163',
            'organization_id' => '1004',
        ],
    ]): ResponseInterface;

    /**
     * 服务关联预授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/palmservice/authorization/preauthorize
     */
    public function postAsync(array $options = [
        'json' => [
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'preauthorize_session_id' => '181167098309019291163',
            'organization_id' => '1004',
        ],
    ]): PromiseInterface;
}
