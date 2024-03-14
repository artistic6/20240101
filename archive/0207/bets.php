<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 7',
		/*** Fav 1 **/
		'f1-f3' => '1, 5, 7',
		'f1-f6' => '1, 7, 11',
		'f1-f9' => '1, 5, 8',
		'f1-f11' => '7, 8, 11',
		'union 1' => '1, 5, 7, 8, 11',
		/*** Fav 6 **/
		'f1-f6' => '1, 7, 11',
		'f2-f6' => '1, 9, 11',
		'f3-f6' => '1, 6, 7',
		'f5-f6' => '1, 7, 9',
		'f6-f10' => '1, 9, 11',
		'union 6' => '1, 6, 7, 9, 11',
		/*** Fav 7 **/
		'f3-f7' => '3, 5, 7',
		'union 7' => '3, 5, 7',
		'union all' => '1, 3, 5, 6, 7, 8, 9, 11',//count: 8
		'Place' => '1, 6, 7',
		'WP' => '7',
		'win' => '1, 2, 4, 6, 7, 10, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 8',
		/*** Fav 4 **/
		'f2-f4' => '5, 7, 12',
		'f3-f4' => '4, 7, 12',
		'union 4' => '4, 5, 7, 12',
		/*** Fav 8 **/
		'union all' => '4, 5, 7, 12',//count: 4
		'Place' => '4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
		/*** Fav 7 **/
		'f3-f7' => '3, 7, 12',
		'f4-f7' => '3, 6, 11',
		'f7-f8' => '3, 11, 12',
		'f7-f9' => '3, 7, 12',
		'union 7' => '3, 6, 7, 11, 12',
		'union all' => '3, 6, 7, 11, 12',//count: 5
		'Place' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3, 11',
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
		/*** Fav 11 **/
		'f6-f11' => '6, 11, 12',
		'union 11' => '6, 11, 12',
		'union all' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 12',//count: 10
		'Place' => '1, 3, 11',
		'WP' => '6, 11',
		'win' => '1, 3, 6, 7, 9, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 7',
		/*** Fav 1 **/
		'f1-f5' => '1, 3, 12',
		'f1-f6' => '3, 4, 7',
		'f1-f8' => '1, 7, 12',
		'union 1' => '1, 3, 4, 7, 12',
		/*** Fav 2 **/
		'f2-f4' => '1, 2, 7',
		'f2-f7' => '1, 7, 8',
		'f2-f9' => '1, 8, 9',
		'union 2' => '1, 2, 7, 8, 9',
		/*** Fav 7 **/
		'f2-f7' => '1, 7, 8',
		'f4-f7' => '1, 4, 7',
		'f5-f7' => '1, 5, 12',
		'f7-f9' => '1, 4, 8',
		'union 7' => '1, 4, 5, 7, 8, 12',
		'union all' => '1, 2, 3, 4, 5, 7, 8, 9, 12',//count: 9
		'Place' => '1, 2, 7',
		'WP' => '1, 7',
		'win' => '1, 2, 6, 7, 10, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '8, 11',
		/*** Fav 8 **/
		'f4-f8' => '3, 8, 12',
		'union 8' => '3, 8, 12',
		/*** Fav 11 **/
		'union all' => '3, 8, 12',//count: 3
		'Place' => '8',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 3',
		/*** Fav 2 **/
		'f2-f7' => '2, 4, 7',
		'union 2' => '2, 4, 7',
		/*** Fav 3 **/
		'f1-f3' => '1, 2, 9',
		'f3-f4' => '1, 3, 10',
		'union 3' => '1, 2, 3, 9, 10',
		'union all' => '1, 2, 3, 4, 7, 9, 10',//count: 7
		'Place' => '2, 3',
		'WP' => '2',
		'win' => '2, 3, 5, 6, 8, 11, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 11',
		/*** Fav 4 **/
		'f1-f4' => '1, 6, 7',
		'f2-f4' => '2, 4, 6',
		'f3-f4' => '6, 7, 12',
		'f4-f5' => '4, 7, 8',
		'f4-f6' => '4, 6, 12',
		'f4-f10' => '4, 7, 9',
		'union 4' => '1, 2, 4, 6, 7, 8, 9, 12',
		/*** Fav 11 **/
		'f10-f11' => '3, 4, 9',
		'union 11' => '3, 4, 9',
		'union all' => '1, 2, 3, 4, 6, 7, 8, 9, 12',//count: 9
		'Place' => '4',
		'WP' => '4, 9',
		'win' => '4, 5, 9, 10, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 3, 5',
		/*** Fav 1 **/
		'f1-f5' => '5, 8, 12',
		'f1-f8' => '1, 5, 8',
		'f1-f10' => '1, 6, 10',
		'union 1' => '1, 5, 6, 8, 10, 12',
		/*** Fav 3 **/
		'f2-f3' => '2, 3, 11',
		'f3-f5' => '3, 8, 11',
		'f3-f10' => '3, 10, 11',
		'union 3' => '2, 3, 8, 10, 11',
		/*** Fav 5 **/
		'f1-f5' => '5, 8, 12',
		'f2-f5' => '3, 4, 11',
		'f3-f5' => '3, 8, 11',
		'union 5' => '3, 4, 5, 8, 11, 12',
		'union all' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 12',//count: 10
		'Place' => '1, 3, 5',
		'WP' => '8',
		'win' => '1, 3, 5, 7, 8, 9',
	],
];
