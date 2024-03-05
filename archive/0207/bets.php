<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '6',
		'favorites' => '1, 6, 7',
		'union' => '1, 3, 5, 6, 7, 8, 9, 11',
		'f3-f6' => '1, 6, 7',
		'f5-f6' => '1, 7, 9',
		'union current favorite' => '1, 6, 7, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '8',
		'favorites' => '4, 8',
		'union' => '4, 5, 7, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '7',
		'favorites' => '7',
		'union' => '3, 6, 7, 11, 12',
		'f3-f7' => '3, 7, 12',
		'f7-f9' => '3, 7, 12',
		'f7-f8' => '3, 11, 12',
		'f4-f7' => '3, 6, 11',
		'union current favorite' => '3, 6, 7, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '1',
		'favorites' => '1, 3, 11',
		'union' => '1, 3, 4, 6, 8, 10, 11, 12',
		'f1-f6' => '6, 10, 11',
		'f1-f8' => '1, 3, 11',
		'union current favorite' => '1, 3, 6, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '2',
		'favorites' => '1, 2, 7',
		'f2-f7' => '1, 7, 8',
		'bet' => '1, 2, 7, 8',
		'union' => '1, 2, 3, 4, 5, 7, 8, 9, 12',
		'f2-f7' => '1, 7, 8',
		'f2-f4' => '1, 2, 7',
		'f2-f9' => '1, 8, 9',
		'union current favorite' => '1, 2, 7, 8, 9',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '8',
		'favorites' => '8, 11',
		'union' => '3, 8, 12',
		'f4-f8' => '3, 8, 12',
		'union current favorite' => '3, 8, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '3',
		'favorites' => '2, 3',
		'union' => '1, 2, 3, 4, 7, 9, 10',
		'f1-f3' => '1, 2, 9',
		'f3-f4' => '1, 3, 10',
		'union current favorite' => '1, 2, 3, 9, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '4',
		'favorites' => '4, 11',
		'union' => '1, 2, 3, 4, 6, 7, 8, 9, 12',
		'f1-f4' => '1, 6, 7',
		'f4-f5' => '4, 7, 8',
		'f4-f6' => '4, 6, 12',
		'f2-f4' => '2, 4, 6',
		'f3-f4' => '6, 7, 12',
		'f4-f10' => '4, 7, 9',
		'union current favorite' => '1, 2, 4, 6, 7, 8, 9, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '3',
		'favorites' => '1, 3, 5',
		'f1-f5' => '5, 8, 12',
		'f3-f5' => '3, 8, 11',
		'bet' => '1, 3, 5, 8, 11, 12',
		'union' => '1, 3, 5, 6, 8, 10, 11, 12',
		'f3-f5' => '3, 8, 11',
		'union current favorite' => '3, 8, 11',
	],
];
