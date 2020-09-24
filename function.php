global $wpdb;
$wpdb->query(
	"
	UPDATE ".$wpdb->prefix."posts 
	SET post_status='publish' 
	WHERE post_status='future' and post_type in ('post')
	"
);
