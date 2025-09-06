add_action( 'rest_api_init', function() {
    remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
    add_filter( 'rest_pre_serve_request', function( $value ) {
        header( 'Access-Control-Allow-Origin: http://127.0.0.1:5500' ); // bara en
        header( 'Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE' );
        header( 'Access-Control-Allow-Headers: Content-Type, Authorization' ); // viktigt om du använder auth
        return $value;
    });
}, 15 );
