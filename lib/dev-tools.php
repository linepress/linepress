<?php

/**
 * Wrapper around dBug.php to provide a better and quicker developer use
 *
 * @since 0.0.1
 */
function _d( $var ) {
  include_once 'dBug.php';
  new dBug ( $var );
}