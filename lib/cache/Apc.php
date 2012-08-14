<?php
namespace ActiveRecord;
class Apc {
	public function __construct( $options = null ) {}
	public function flush() {
		\apc_clear_cache( 'user' );
	}
	public function read( $key ) {
		return \apc_fetch( $key );
	}
	public function write( $key, $value, $expire ) {
		\apc_store( $key, $value, $expire );
	}
}
/* end of file */