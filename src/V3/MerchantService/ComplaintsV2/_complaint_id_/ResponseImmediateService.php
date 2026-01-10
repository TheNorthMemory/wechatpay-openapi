<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ResponseImmediateService
{
    /**
     * 回复需要即时服务的投诉单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D/response-immediate-service
     */
    public function post(array $options = [
        'complaint_id' => '200201820200101080076610000',
        'json' => [
            'complainted_mchid' => '1900012181',
            'message' => [
                'blocks' => [[
                    'type' => 'TEXT',
                    'text' => [
                        'text' => 'example_text',
                        'color' => 'DEFAULT',
                        'is_bold' => true,
                    ],
                    'image' => [
                        'media_id' => 'example_media_id',
                        'image_style_type' => 'IMAGE_STYLE_TYPE_NARROW',
                    ],
                    'link' => [
                        'text' => 'example_text',
                        'action' => [
                            'action_type' => 'ACTION_TYPE_SEND_MESSAGE',
                            'jump_url' => 'example_jump_url',
                            'mini_program_jump_info' => [
                                'appid' => 'example_appid',
                                'path' => 'example_path',
                                'text' => 'example_text',
                            ],
                            'message_info' => [
                                'content' => 'example_content',
                                'custom_data' => 'example_custom_data',
                            ],
                            'action_id' => 'example_action_id',
                        ],
                        'invalid_info' => [
                            'expired_time' => '2015-05-20T13:29:35+08:00',
                            'multi_clickable' => true,
                        ],
                    ],
                    'faq_list' => [
                        'faqs' => [[
                            'faq_id' => 'example_faq_id',
                            'faq_title' => 'example_faq_title',
                            'action' => [
                                'action_type' => 'ACTION_TYPE_SEND_MESSAGE',
                                'jump_url' => 'example_jump_url',
                                'mini_program_jump_info' => [
                                    'appid' => 'example_appid',
                                    'path' => 'example_path',
                                    'text' => 'example_text',
                                ],
                                'message_info' => [
                                    'content' => 'example_content',
                                    'custom_data' => 'example_custom_data',
                                ],
                                'action_id' => 'example_action_id',
                            ],
                        ],],
                    ],
                    'button' => [
                        'text' => 'example_text',
                        'action' => [
                            'action_type' => 'ACTION_TYPE_SEND_MESSAGE',
                            'jump_url' => 'example_jump_url',
                            'mini_program_jump_info' => [
                                'appid' => 'example_appid',
                                'path' => 'example_path',
                                'text' => 'example_text',
                            ],
                            'message_info' => [
                                'content' => 'example_content',
                                'custom_data' => 'example_custom_data',
                            ],
                            'action_id' => 'example_action_id',
                        ],
                        'invalid_info' => [
                            'expired_time' => '2015-05-20T13:29:35+08:00',
                            'multi_clickable' => true,
                        ],
                    ],
                    'button_group' => [
                        'buttons' => [[
                            'text' => 'example_text',
                            'action' => [
                                'action_type' => 'ACTION_TYPE_SEND_MESSAGE',
                                'jump_url' => 'example_jump_url',
                                'mini_program_jump_info' => [
                                    'appid' => 'example_appid',
                                    'path' => 'example_path',
                                    'text' => 'example_text',
                                ],
                                'message_info' => [
                                    'content' => 'example_content',
                                    'custom_data' => 'example_custom_data',
                                ],
                                'action_id' => 'example_action_id',
                            ],
                            'invalid_info' => [
                                'expired_time' => '2015-05-20T13:29:35+08:00',
                                'multi_clickable' => true,
                            ],
                        ],],
                        'button_layout' => 'LAYOUT_HORIZONTAL',
                        'invalid_info' => [
                            'expired_time' => '2015-05-20T13:29:35+08:00',
                            'multi_clickable' => true,
                        ],
                    ],
                ],],
                'sender_identity' => 'UNKNOWN',
                'custom_data' => 'example_custom_data',
            ],
            'idempotent_id' => '550e8400-e29b-41d4-a716-446655440000',
        ],
    ]): ResponseInterface;

    /**
     * 回复需要即时服务的投诉单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D/response-immediate-service
     */
    public function postAsync(array $options = [
        'complaint_id' => '200201820200101080076610000',
        'json' => [
            'complainted_mchid' => '1900012181',
            'message' => [
                'blocks' => [[
                    'type' => 'TEXT',
                    'text' => [
                        'text' => 'example_text',
                        'color' => 'DEFAULT',
                        'is_bold' => true,
                    ],
                    'image' => [
                        'media_id' => 'example_media_id',
                        'image_style_type' => 'IMAGE_STYLE_TYPE_NARROW',
                    ],
                    'link' => [
                        'text' => 'example_text',
                        'action' => [
                            'action_type' => 'ACTION_TYPE_SEND_MESSAGE',
                            'jump_url' => 'example_jump_url',
                            'mini_program_jump_info' => [
                                'appid' => 'example_appid',
                                'path' => 'example_path',
                                'text' => 'example_text',
                            ],
                            'message_info' => [
                                'content' => 'example_content',
                                'custom_data' => 'example_custom_data',
                            ],
                            'action_id' => 'example_action_id',
                        ],
                        'invalid_info' => [
                            'expired_time' => '2015-05-20T13:29:35+08:00',
                            'multi_clickable' => true,
                        ],
                    ],
                    'faq_list' => [
                        'faqs' => [[
                            'faq_id' => 'example_faq_id',
                            'faq_title' => 'example_faq_title',
                            'action' => [
                                'action_type' => 'ACTION_TYPE_SEND_MESSAGE',
                                'jump_url' => 'example_jump_url',
                                'mini_program_jump_info' => [
                                    'appid' => 'example_appid',
                                    'path' => 'example_path',
                                    'text' => 'example_text',
                                ],
                                'message_info' => [
                                    'content' => 'example_content',
                                    'custom_data' => 'example_custom_data',
                                ],
                                'action_id' => 'example_action_id',
                            ],
                        ],],
                    ],
                    'button' => [
                        'text' => 'example_text',
                        'action' => [
                            'action_type' => 'ACTION_TYPE_SEND_MESSAGE',
                            'jump_url' => 'example_jump_url',
                            'mini_program_jump_info' => [
                                'appid' => 'example_appid',
                                'path' => 'example_path',
                                'text' => 'example_text',
                            ],
                            'message_info' => [
                                'content' => 'example_content',
                                'custom_data' => 'example_custom_data',
                            ],
                            'action_id' => 'example_action_id',
                        ],
                        'invalid_info' => [
                            'expired_time' => '2015-05-20T13:29:35+08:00',
                            'multi_clickable' => true,
                        ],
                    ],
                    'button_group' => [
                        'buttons' => [[
                            'text' => 'example_text',
                            'action' => [
                                'action_type' => 'ACTION_TYPE_SEND_MESSAGE',
                                'jump_url' => 'example_jump_url',
                                'mini_program_jump_info' => [
                                    'appid' => 'example_appid',
                                    'path' => 'example_path',
                                    'text' => 'example_text',
                                ],
                                'message_info' => [
                                    'content' => 'example_content',
                                    'custom_data' => 'example_custom_data',
                                ],
                                'action_id' => 'example_action_id',
                            ],
                            'invalid_info' => [
                                'expired_time' => '2015-05-20T13:29:35+08:00',
                                'multi_clickable' => true,
                            ],
                        ],],
                        'button_layout' => 'LAYOUT_HORIZONTAL',
                        'invalid_info' => [
                            'expired_time' => '2015-05-20T13:29:35+08:00',
                            'multi_clickable' => true,
                        ],
                    ],
                ],],
                'sender_identity' => 'UNKNOWN',
                'custom_data' => 'example_custom_data',
            ],
            'idempotent_id' => '550e8400-e29b-41d4-a716-446655440000',
        ],
    ]): PromiseInterface;
}
