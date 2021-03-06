<?php

use hypeJunction\Lists\Bootstrap;

return [
        'plugin' => [
                'version' => '4.0',
		'name' => 'AJAX lists for Elgg',
        ],
	'bootstrap' => Bootstrap::class,
	'routes' => [
		'collection:all' => [
			'path' => '/collection/{type}/{subtype}/all',
			'resource' => 'collection/all',
		],
		'collection:owner' => [
			'path' => '/collection/{type}/{subtype}/owner/{username?}',
			'resource' => 'collection/owner',
		],
		'collection:friends' => [
			'path' => '/collection/{type}/{subtype}/friends/{username?}',
			'resource' => 'collection/friends',
		],
		'collection:group' => [
			'path' => '/collection/{type}/{subtype}/group/{guid}',
			'resource' => 'collection/group',
		],
		'data' => [
			'path'=> '/data/{segments}',
			'controller' => \hypeJunction\Data\DataController::class,
			'requirements' => [
				'segments' => '.+',
			],
		],
	],
	'settings' => [
		'pagination_type' => 'default',
	],
	'view_extensions' => [
		'elgg.css' => [
			'components/list/pagination.css' => [],
		],
	],
	'views' => [
		'default' => [
			'hypeList.js' => __DIR__ . '/views/default/components/list.js',
			'js/framework/lists/init.js' => __DIR__ . '/views/default/components/list/init.js',
			'js/framework/lists/require' => __DIR__ . '/views/default/components/list/require.php',
		],
	],
];

