<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		/*** Fav 2 **/
		'f2-f3' => '1, 3, 5',
		'f2-f4' => '1, 2, 5',
		'f2-f6' => '1, 9, 11',
		'union 2' => '1, 2, 3, 5, 9, 11',
		/*** Fav 3 **/
		'f1-f3' => '1, 5, 7',
		'f2-f3' => '1, 3, 5',
		'f3-f4' => '1, 4, 5',
		'f3-f5' => '1, 5, 7',
		'f3-f6' => '1, 6, 7',
		'f3-f7' => '3, 5, 7',
		'f3-f8' => '1, 3, 5',
		'f3-f10' => '1, 4, 5',
		'union 3' => '1, 3, 4, 5, 6, 7',
		/*** Fav 4 **/
		'f2-f4' => '1, 2, 5',
		'f3-f4' => '1, 4, 5',
		'union 4' => '1, 2, 4, 5',
		/*** Fav 6 **/
		'f1-f6' => '1, 7, 11',
		'f2-f6' => '1, 9, 11',
		'f3-f6' => '1, 6, 7',
		'f5-f6' => '1, 7, 9',
		'f6-f10' => '1, 9, 11',
		'union 6' => '1, 6, 7, 9, 11',
		'union all' => '1, 2, 3, 4, 5, 6, 7, 9, 11',//count: 9
		'Place' => '2, 3, 4, 6',
		'WP' => '1',
		'win' => '1, 2, 3, 4, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		/*** Fav 3 **/
		'f1-f3' => '2, 6, 7',
		'f3-f4' => '4, 7, 12',
		'f3-f6' => '2, 4, 6',
		'union 3' => '2, 4, 6, 7, 12',
		/*** Fav 4 **/
		'f2-f4' => '5, 7, 12',
		'f3-f4' => '4, 7, 12',
		'union 4' => '4, 5, 7, 12',
		'union all' => '2, 4, 5, 6, 7, 12',//count: 6
		'Place' => '4',
		'WP' => '4, 7, 12',
		'win' => '3, 4, 7, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4, 11, 12',
		/*** Fav 4 **/
		'f3-f4' => '3, 4, 8',
		'f4-f7' => '3, 6, 11',
		'union 4' => '3, 4, 6, 8, 11',
		/*** Fav 11 **/
		/*** Fav 12 **/
		'f2-f12' => '2, 10, 12',
		'f8-f12' => '2, 10, 12',
		'union 12' => '2, 10, 12',
		'union all' => '2, 3, 4, 6, 8, 10, 11, 12',//count: 8
		'Place' => '4, 12',
		'WP' => '',
		'win' => '4, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3',
		/*** Fav 1 **/
		'f1-f2' => '2, 5, 10',
		'f1-f5' => '2, 5, 10',
		'f1-f6' => '6, 10, 11',
		'f1-f8' => '1, 3, 11',
		'union 1' => '1, 2, 3, 5, 6, 10, 11',
		/*** Fav 3 **/
		'f3-f4' => '3, 4, 11',
		'f3-f6' => '4, 6, 11',
		'f3-f8' => '3, 8, 11',
		'union 3' => '3, 4, 6, 8, 11',
		'union all' => '1, 2, 3, 4, 5, 6, 8, 10, 11',//count: 9
		'Place' => '1, 3',
		'WP' => '3, 6, 11',
		'win' => '1, 3, 6, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8',
		/*** Fav 5 **/
		'f1-f5' => '1, 3, 12',
		'f3-f5' => '1, 3, 12',
		'f5-f7' => '1, 5, 12',
		'f5-f8' => '1, 5, 12',
		'union 5' => '1, 3, 5, 12',
		/*** Fav 8 **/
		'f1-f8' => '1, 7, 12',
		'f3-f8' => '1, 7, 12',
		'f4-f8' => '1, 2, 7',
		'f5-f8' => '1, 5, 12',
		'f6-f8' => '7, 9, 11',
		'f8-f9' => '1, 8, 9',
		'f8-f12' => '2, 5, 12',
		'union 8' => '1, 2, 5, 7, 8, 9, 11, 12',
		'union all' => '1, 2, 3, 5, 7, 8, 9, 11, 12',//count: 9
		'Place' => '5, 8',
		'WP' => '1, 5, 12',
		'win' => '1, 5, 8, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
		/*** Fav 1 **/
		'f1-f3' => '1, 3, 9',
		'f1-f6' => '1, 7, 12',
		'union 1' => '1, 3, 7, 9, 12',
		/*** Fav 3 **/
		'f1-f3' => '1, 3, 9',
		'f3-f6' => '1, 7, 11',
		'f3-f9' => '1, 5, 7',
		'union 3' => '1, 3, 5, 7, 9, 11',
		'union all' => '1, 3, 5, 7, 9, 11, 12',//count: 7
		'Place' => '1, 3',
		'WP' => '1, 3, 7, 9',
		'win' => '1, 3, 7, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
		/*** Fav 4 **/
		'f3-f4' => '1, 3, 10',
		'f4-f5' => '2, 5, 10',
		'f4-f7' => '4, 7, 8',
		'f4-f10' => '3, 8, 10',
		'union 4' => '1, 2, 3, 4, 5, 7, 8, 10',
		'union all' => '1, 2, 3, 4, 5, 7, 8, 10',//count: 8
		'Place' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7',
		/*** Fav 7 **/
		'f5-f7' => '3, 4, 5',
		'f7-f9' => '3, 4, 5',
		'union 7' => '3, 4, 5',
		'union all' => '3, 4, 5',//count: 3
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4',
		/*** Fav 2 **/
		'f2-f3' => '2, 3, 11',
		'f2-f5' => '3, 4, 11',
		'f2-f6' => '2, 4, 6',
		'f2-f10' => '3, 6, 11',
		'union 2' => '2, 3, 4, 6, 11',
		/*** Fav 4 **/
		'f4-f6' => '4, 6, 7',
		'union 4' => '4, 6, 7',
		'union all' => '2, 3, 4, 6, 7, 11',//count: 6
		'Place' => '2, 4',
		'WP' => '4, 6',
		'win' => '2, 4, 6',
	],
];
