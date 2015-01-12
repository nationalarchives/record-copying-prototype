<?php
/**
 * Created by PhpStorm.
 * User: gjones
 * Date: 12/01/2015
 * Time: 09:36
 */

function echoDate() {
    date_default_timezone_set('UTC');
    echo(date('l jS F Y h:i a'));
}