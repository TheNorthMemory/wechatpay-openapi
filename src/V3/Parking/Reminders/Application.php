<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Parking\Reminders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Application\Query $query
 * @property-read Application\Withdraw $withdraw
 */
interface Application
{
    /**
     * 提交停车场进件申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/application
     */
    public function post(array $options = [
        'json' => [
            'parking_lot' => [
                'parking_lot_name' => 'XX购物中心停车场',
                'out_parking_lot_id' => 'PARK001',
                'parking_lot_address' => 'XX市XX区XX路XX号',
                'longitude' => '116.397128',
                'latitude' => '39.916527',
                'parking_lot_type' => 'PARKING_LOT_TYPE_BUSINESS_DISTRICT',
                'phone_number' => '13800138000',
                'parking_sign_url' => 'https://example.com/parking_sign.jpg',
                'notification_text_list' => ['string'],
                'payment_mini_prog_appid' => 'wx1234567890abcdef',
                'payment_path' => 'pages/pay/index',
                'parking_order_mini_prog_appid' => 'wx1234567890abcdef',
                'parking_order_path' => 'pages/order/index',
                'charging_rule' => [
                    'rule_type' => 'CHARGING_RULE_FIXED_INTERVAL',
                    'fee_limit_type' => 'FEE_LIMIT_AGGREGATE',
                    'daily_limit_type' => 'DAILY_LIMIT_CALENDAR_DAY',
                    'time_rounding_type' => 'TIME_ROUND_UP',
                    'free_entry_duration' => 30,
                    'free_exit_duration' => 15,
                    'fixed_interval_rule' => [[
                        'day_type' => 'DAY_TYPE_WEEKDAY',
                        'start_time' => '09:00',
                        'end_time' => '18:00',
                        'vehicle_type' => 'VEHICLE_TYPE_SMALL',
                        'plate_type' => 'PLATE_TYPE_TEMPORARY',
                        'first_duration' => 60,
                        'first_amount' => 500,
                        'interval_duration' => 30,
                        'interval_amount' => 200,
                        'interval_max_amount' => 1000,
                        'max_fee_per_day' => 5000,
                        'free_period_charging_mode' => 'FREE_PERIOD_CHARGING_ONCE_PER_ENTRY',
                        'free_period_calculation_mode' => 'FREE_PERIOD_CAL_SEQUENTIAL_START',
                        'is_green_vehicle_free_parking' => true,
                        'first_duration_mode' => 'FIRST_DURATION_MODE_ONLY_FIRST_DURATION',
                    ],],
                    'duration_segment_rule' => [[
                        'day_type' => 'DAY_TYPE_WEEKDAY',
                        'start_time' => '09:00',
                        'end_time' => '18:00',
                        'vehicle_type' => 'VEHICLE_TYPE_SMALL',
                        'plate_type' => 'PLATE_TYPE_TEMPORARY',
                        'charge_mode' => 'INTERVAL',
                        'duration_from' => 0,
                        'duration_to' => 60,
                        'fixed_amount' => 1000,
                        'interval_min' => 30,
                        'interval_amount' => 200,
                        'interval_max_amount' => 1000,
                        'max_fee_per_day' => 5000,
                    ],],
                    'pre_entry_rule' => [[
                        'day_type' => 'DAY_TYPE_WEEKDAY',
                        'start_time' => '09:00',
                        'end_time' => '18:00',
                        'vehicle_type' => 'VEHICLE_TYPE_SMALL',
                        'plate_type' => 'PLATE_TYPE_TEMPORARY',
                        'amount' => 1000,
                        'max_fee_per_day' => 5000,
                    ],],
                    'holiday_mode' => 'HOLIDAY_MODE_LEGAL_MODY',
                    'aggregate_limit_mode' => 'AGGREGATE_LIMIT_MODE_NORMAL',
                    'first_charge_time_mode' => 'FIRST_CHARGE_TIME_MODE_ENTER',
                ],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 提交停车场进件申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/parking/reminders/application
     */
    public function postAsync(array $options = [
        'json' => [
            'parking_lot' => [
                'parking_lot_name' => 'XX购物中心停车场',
                'out_parking_lot_id' => 'PARK001',
                'parking_lot_address' => 'XX市XX区XX路XX号',
                'longitude' => '116.397128',
                'latitude' => '39.916527',
                'parking_lot_type' => 'PARKING_LOT_TYPE_BUSINESS_DISTRICT',
                'phone_number' => '13800138000',
                'parking_sign_url' => 'https://example.com/parking_sign.jpg',
                'notification_text_list' => ['string'],
                'payment_mini_prog_appid' => 'wx1234567890abcdef',
                'payment_path' => 'pages/pay/index',
                'parking_order_mini_prog_appid' => 'wx1234567890abcdef',
                'parking_order_path' => 'pages/order/index',
                'charging_rule' => [
                    'rule_type' => 'CHARGING_RULE_FIXED_INTERVAL',
                    'fee_limit_type' => 'FEE_LIMIT_AGGREGATE',
                    'daily_limit_type' => 'DAILY_LIMIT_CALENDAR_DAY',
                    'time_rounding_type' => 'TIME_ROUND_UP',
                    'free_entry_duration' => 30,
                    'free_exit_duration' => 15,
                    'fixed_interval_rule' => [[
                        'day_type' => 'DAY_TYPE_WEEKDAY',
                        'start_time' => '09:00',
                        'end_time' => '18:00',
                        'vehicle_type' => 'VEHICLE_TYPE_SMALL',
                        'plate_type' => 'PLATE_TYPE_TEMPORARY',
                        'first_duration' => 60,
                        'first_amount' => 500,
                        'interval_duration' => 30,
                        'interval_amount' => 200,
                        'interval_max_amount' => 1000,
                        'max_fee_per_day' => 5000,
                        'free_period_charging_mode' => 'FREE_PERIOD_CHARGING_ONCE_PER_ENTRY',
                        'free_period_calculation_mode' => 'FREE_PERIOD_CAL_SEQUENTIAL_START',
                        'is_green_vehicle_free_parking' => true,
                        'first_duration_mode' => 'FIRST_DURATION_MODE_ONLY_FIRST_DURATION',
                    ],],
                    'duration_segment_rule' => [[
                        'day_type' => 'DAY_TYPE_WEEKDAY',
                        'start_time' => '09:00',
                        'end_time' => '18:00',
                        'vehicle_type' => 'VEHICLE_TYPE_SMALL',
                        'plate_type' => 'PLATE_TYPE_TEMPORARY',
                        'charge_mode' => 'INTERVAL',
                        'duration_from' => 0,
                        'duration_to' => 60,
                        'fixed_amount' => 1000,
                        'interval_min' => 30,
                        'interval_amount' => 200,
                        'interval_max_amount' => 1000,
                        'max_fee_per_day' => 5000,
                    ],],
                    'pre_entry_rule' => [[
                        'day_type' => 'DAY_TYPE_WEEKDAY',
                        'start_time' => '09:00',
                        'end_time' => '18:00',
                        'vehicle_type' => 'VEHICLE_TYPE_SMALL',
                        'plate_type' => 'PLATE_TYPE_TEMPORARY',
                        'amount' => 1000,
                        'max_fee_per_day' => 5000,
                    ],],
                    'holiday_mode' => 'HOLIDAY_MODE_LEGAL_MODY',
                    'aggregate_limit_mode' => 'AGGREGATE_LIMIT_MODE_NORMAL',
                    'first_charge_time_mode' => 'FIRST_CHARGE_TIME_MODE_ENTER',
                ],
            ],
        ],
    ]): PromiseInterface;
}
