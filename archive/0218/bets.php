<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 6, 9',
		/*** Fav 5 **/
		'f3-f5' => '1, 5, 7',
		'f5-f6' => '1, 7, 9',
		'f5-f8' => '1, 5, 12',
		'f5-f9' => '1, 5, 8',
		'union 5' => '1, 5, 7, 8, 9, 12',
		/*** Fav 6 **/
		'f3-f6' => '1, 6, 7',
		'f5-f6' => '1, 7, 9',
		'union 6' => '1, 6, 7, 9',
		/*** Fav 9 **/
		'f1-f9' => '1, 5, 8',
		'f5-f9' => '1, 5, 8',
		'f8-f9' => '1, 3, 5',
		'union 9' => '1, 3, 5, 8',
		'Sure Place' => '5, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4',
		/*** Fav 4 **/
		'f2-f4' => '5, 7, 12',
		'union 4' => '5, 7, 12',
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
		'Sure Place' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 8',
		/*** Fav 1 **/
		'f1-f2' => '2, 5, 10',
		'f1-f5' => '2, 5, 10',
		'f1-f8' => '1, 3, 11',
		'union 1' => '1, 2, 3, 5, 10, 11',
		/*** Fav 8 **/
		'f1-f8' => '1, 3, 11',
		'f3-f8' => '3, 8, 11',
		'f8-f9' => '1, 8, 11',
		'union 8' => '1, 3, 8, 11',
		'Sure Place' => '1, 8',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 7',
		/*** Fav 3 **/
		'f3-f5' => '1, 3, 12',
		'f3-f6' => '3, 4, 7',
		'f3-f8' => '1, 7, 12',
		'union 3' => '1, 3, 4, 7, 12',
		/*** Fav 7 **/
		'f2-f7' => '1, 7, 8',
		'f4-f7' => '1, 4, 7',
		'f5-f7' => '1, 5, 12',
		'f7-f9' => '1, 4, 8',
		'union 7' => '1, 4, 5, 7, 8, 12',
		'Sure Place' => '3, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 7, 12',
		/*** Fav 6 **/
		'f1-f6' => '1, 7, 12',
		'f4-f6' => '6, 7, 12',
		'f5-f6' => '1, 6, 11',
		'f6-f7' => '1, 6, 11',
		'f6-f10' => '7, 10, 12',
		'f6-f12' => '1, 11, 12',
		'union 6' => '1, 6, 7, 10, 11, 12',
		/*** Fav 7 **/
		'f4-f7' => '3, 6, 13',
		'f5-f7' => '1, 6, 11',
		'f6-f7' => '1, 6, 11',
		'union 7' => '1, 3, 6, 11, 13',
		/*** Fav 12 **/
		'f6-f12' => '1, 11, 12',
		'union 12' => '1, 11, 12',
		'Sure Place' => '6, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '7, 10',
		/*** Fav 7 **/
		'f2-f7' => '2, 4, 7',
		'union 7' => '2, 4, 7',
		/*** Fav 10 **/
		'f4-f10' => '3, 8, 10',
		'union 10' => '3, 8, 10',
		'Sure Place' => '7, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '9, 11',
		/*** Fav 9 **/
		'f2-f9' => '2, 4, 5',
		'f7-f9' => '3, 4, 5',
		'f8-f9' => '2, 3, 13',
		'f9-f10' => '3, 4, 10',
		'union 9' => '2, 3, 4, 5, 10, 13',
		/*** Fav 11 **/
		'f10-f11' => '3, 4, 9',
		'union 11' => '3, 4, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 7',
		/*** Fav 4 **/
		'f4-f6' => '4, 6, 7',
		'union 4' => '4, 6, 7',
		/*** Fav 7 **/
		'Sure Place' => '4',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 4, 12',
		/*** Fav 2 **/
		/*** Fav 4 **/
		'f3-f4' => '3, 4, 11',
		'union 4' => '3, 4, 11',
		/*** Fav 12 **/
		'Sure Place' => '4',
	],
];
