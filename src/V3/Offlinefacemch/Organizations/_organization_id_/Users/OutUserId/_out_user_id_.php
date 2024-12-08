<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlinefacemch\Organizations\_organization_id_\Users\OutUserId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_user_id_
{
    /**
     * 刷脸用户信息查询接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlinefacemch/organizations/%7Borganization_id%7D/users/out-user-id/%7Bout_user_id%7D
     */
    public function get(array $options = [
        'organization_id' => '',
        'out_user_id' => '',
    ]): ResponseInterface;

    /**
     * 刷脸用户信息查询接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlinefacemch/organizations/%7Borganization_id%7D/users/out-user-id/%7Bout_user_id%7D
     */
    public function getAsync(array $options = [
        'organization_id' => '',
        'out_user_id' => '',
    ]): PromiseInterface;

    /**
     * 刷脸用户信息修改接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlinefacemch/organizations/%7Borganization_id%7D/users/out-user-id/%7Bout_user_id%7D#patch
     */
    public function patch(array $options = [
        'organization_id' => '',
        'out_user_id' => '',
        'json' => [
            'user_name' => '',
            'user_type' => 'STUDENT | STUFF',
            'student_info' => [
                'class_name' => '',
            ],
            'staff_info' => [
                'occupation' => '',
            ],
            'status' => 'NORMAL | DISABLED',
            'phone' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 刷脸用户信息修改接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlinefacemch/organizations/%7Borganization_id%7D/users/out-user-id/%7Bout_user_id%7D#patch
     */
    public function patchAsync(array $options = [
        'organization_id' => '',
        'out_user_id' => '',
        'json' => [
            'user_name' => '',
            'user_type' => 'STUDENT | STUFF',
            'student_info' => [
                'class_name' => '',
            ],
            'staff_info' => [
                'occupation' => '',
            ],
            'status' => 'NORMAL | DISABLED',
            'phone' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
