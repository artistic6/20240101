<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '4, 12',
		/*** Fav 4 **/
		'f2-f4' => '1, 2, 5',
		'f3-f4' => '1, 4, 5',
		'union 4' => '1, 2, 4, 5',
		/*** Fav 12 **/
		'union all' => '1, 2, 4, 5',//count: 4
		'Sure Place' => '4',
		'inter' => '1, 2, 4, 5',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3, 12, 13',
		/*** Fav 2 **/
		'f2-f4' => '5, 7, 12',
		'f2-f9' => '2, 6, 9',
		'union 2' => '2, 5, 6, 7, 9, 12',
		/*** Fav 3 **/
		'f1-f3' => '2, 6, 7',
		'f3-f12' => '6, 10, 13',
		'union 3' => '2, 6, 7, 10, 13',
		/*** Fav 12 **/
		'f3-f12' => '6, 10, 13',
		'union 12' => '6, 10, 13',
		/*** Fav 13 **/
		'union all' => '2, 5, 6, 7, 9, 10, 12, 13',//count: 8
		'Sure Place' => '2',
		'inter' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 6',
		/*** Fav 3 **/
		'f3-f4' => '3, 4, 8',
		'f3-f7' => '3, 7, 12',
		'f3-f9' => '3, 7, 12',
		'union 3' => '3, 4, 7, 8, 12',
		/*** Fav 6 **/
		'f6-f8' => '1, 3, 12',
		'union 6' => '1, 3, 12',
		'union all' => '1, 3, 4, 7, 8, 12',//count: 6
		'Sure Place' => '3',
		'inter' => '3, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 10',
		/*** Fav 1 **/
		'f1-f2' => '2, 5, 10',
		'f1-f5' => '2, 5, 10',
		'f1-f8' => '1, 3, 11',
		'union 1' => '1, 2, 3, 5, 10, 11',
		/*** Fav 2 **/
		'f1-f2' => '2, 5, 10',
		'f2-f6' => '5, 10, 12',
		'f2-f9' => '7, 9, 12',
		'union 2' => '2, 5, 7, 9, 10, 12',
		/*** Fav 10 **/
		'union all' => '1, 2, 3, 5, 7, 9, 10, 11, 12',//count: 9
		'Sure Place' => '1, 2',
		'inter' => '2, 5, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 10, 12',
		/*** Fav 4 **/
		'f2-f4' => '1, 2, 7',
		'f4-f7' => '1, 4, 7',
		'f4-f8' => '1, 2, 7',
		'union 4' => '1, 2, 4, 7',
		/*** Fav 10 **/
		/*** Fav 12 **/
		'f8-f12' => '2, 5, 12',
		'union 12' => '2, 5, 12',
		'union all' => '1, 2, 4, 5, 7, 12',//count: 6
		'Sure Place' => '4, 12',
		'inter' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		/*** Fav 3 **/
		'f3-f6' => '1, 7, 11',
		'f3-f9' => '1, 5, 7',
		'union 3' => '1, 5, 7, 11',
		/*** Fav 7 **/
		'f5-f7' => '1, 6, 11',
		'f7-f9' => '1, 5, 7',
		'union 7' => '1, 5, 6, 7, 11',
		'union all' => '1, 5, 6, 7, 11',//count: 5
		'Sure Place' => '7',
		'inter' => '1, 5, 7, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
		/*** Fav 4 **/
		'f4-f5' => '2, 5, 10',
		'f4-f10' => '3, 8, 10',
		'union 4' => '2, 3, 5, 8, 10',
		'union all' => '2, 3, 5, 8, 10',//count: 5
		'inter' => '2, 3, 5, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '6',
		/*** Fav 6 **/
		'f2-f6' => '4, 6, 11',
		'f4-f6' => '4, 6, 12',
		'union 6' => '4, 6, 11, 12',
		'union all' => '4, 6, 11, 12',//count: 4
		'Sure Place' => '6',
		'inter' => '4, 6, 11, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 8, 12',
		/*** Fav 1 **/
		'f1-f5' => '5, 8, 12',
		'f1-f8' => '1, 5, 8',
		'f1-f10' => '1, 6, 10',
		'union 1' => '1, 5, 6, 8, 10, 12',
		/*** Fav 8 **/
		'f1-f8' => '1, 5, 8',
		'union 8' => '1, 5, 8',
		/*** Fav 12 **/
		'union all' => '1, 5, 6, 8, 10, 12',//count: 6
		'Sure Place' => '1, 8',
		'inter' => '1, 5, 8',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '5, 13',
		/*** Fav 5 **/
		'f3-f5' => '3, 4, 12',
		'union 5' => '3, 4, 12',
		/*** Fav 13 **/
		'union all' => '3, 4, 12',//count: 3
		'inter' => '3, 4, 12',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '4, 5, 6, 13',
		/*** Fav 4 **/
		/*** Fav 5 **/
		/*** Fav 6 **/
		/*** Fav 13 **/
		'union all' => '',//count: 0
	],
];
