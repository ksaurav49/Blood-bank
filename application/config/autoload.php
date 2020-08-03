<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$autoload['packages'] = array();


$autoload['libraries'] = array('database', 'email', 'session','form_validation','pagination');


$autoload['drivers'] = array('cache');


$autoload['helper'] = array('url', 'file','form','security','custom');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('ReceiverModel');
