<?php

use Psr\Log\LogLevel;
use Mild\Mail\SimpleMessage;
use Mild\Log\DatabaseHandler;

return [
    
    'channel' => env('LOG_CHANNEL', 'Mild'),

    'driver' => ['stream'],

    'drivers' => [
        'mail' => [
            'level' => LogLevel::ERROR,
            'resolver' => function ($mail, $channel, $level, $message, $context) {
                /**
                 * @var SimpleMessage $mail
                 */
                $mail->from('admin@example.com', 'admin')
                        ->to('recipient@example.com', 'recipient')
                        ->subject('Log Report')
                        ->body(view('vendor.mail.log')->with(
                            compact('channel', 'level', 'message', 'context')
                        ));
            },
        ],
        'stream' => [
            'level' => LogLevel::DEBUG,
            'path' => path('storage/logs/mild.log')
        ],
        'browser' => [
            'level' => LogLevel::DEBUG
        ],
        'database' => [
            'level' => LogLevel::DEBUG,
            'table' => 'logs',
            'columns' => [
                DatabaseHandler::COL_TIME => DatabaseHandler::COL_TIME,
                DatabaseHandler::COL_LEVEL => DatabaseHandler::COL_LEVEL,
                DatabaseHandler::COL_CHANNEL => DatabaseHandler::COL_CHANNEL,
                DatabaseHandler::COL_MESSAGE => DatabaseHandler::COL_MESSAGE,
                DatabaseHandler::COL_CONTEXT => DatabaseHandler::COL_CONTEXT
            ]
        ],
        'slack_webhook' => [
            'url' => 'https://hooks.slack.com/services/{id}',
            'icon' => ':boom:',
            'username' => 'Mild'
        ]
    ]
];