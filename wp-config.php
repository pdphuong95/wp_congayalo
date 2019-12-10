<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'web_congay_alo' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K_+&VDS :V J~a*@|*S{G!f|3V_^:6t&RE7xNtwZy+]2af|gK_O}VT>150a]B]Ch' );
define( 'SECURE_AUTH_KEY',  '7b.Dx#co.pVvz8k+cZBe]V([-m3b#A`3i,TbMsr2;-{8=K]v ;|!`0uwIL0BFq=N' );
define( 'LOGGED_IN_KEY',    'iD/9:P0+9-?N?u]{Az*G|hXz:18{:>)[V ? 3P6/0*ztb7I9`(Z(J#jlBRU6&F3s' );
define( 'NONCE_KEY',        'bTFx,pmF;.Y6UhPSW%HO)BXkXd 5>8q21B%>}v=)_l*is1,1pc{;`Tl/fFH!U&U`' );
define( 'AUTH_SALT',        '?{.6p.O@#cZ=x& 6]-0=b5M&9@+Jmkyt=yKp7< (?oRomydjT3vE*Aj0|x}fuQ<W' );
define( 'SECURE_AUTH_SALT', 'd#pWm%;D?[>0VtJ+/ECc8Lzsr&w+bj5`,oVdW)&P?~5_s,C&Bc2)pW`kYKMF:-s8' );
define( 'LOGGED_IN_SALT',   'voQBtQluy+$]@Z!i[=o,*T4Bsq>gakYO]QvtWV,6b5N>HuHT`c>tK[PdB3 `;%I0' );
define( 'NONCE_SALT',       'h<kB>ThEKI2xs%{4W?]-HMwZzYzOH2^|bqs,7(|?njTd(Qef/+1)bly+:J&FVJTT' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'bz_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
