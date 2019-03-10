<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
function argon2i_password_algo_init(){
		ossn_add_hook('user', 'password:algorithm', 'argon2i_algo');
}
function argon2i_algo(){
		return 'argon2i';	
}
ossn_register_callback('ossn', 'init', 'argon2i_password_algo_init');
