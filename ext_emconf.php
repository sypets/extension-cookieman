<?php

/*
 * This file is part of the package dmind/cookieman.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cookieman',
    'description' => 'A GDPR tracking consent popup. It asks for approval to include tracking objects (cookies, images or any HTML) and includes the objects when consented. It also removes cookies after the consent has been revoked. Notice: Supports TYPO3v8-v*, but each unique version only supports one!',
    'category' => 'fe',
    'author' => 'Jonas Eberle',
    'author_email' => 'jonas.eberle@d-mind.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '2.9.3',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    ];
