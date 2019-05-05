<?php
/**
 * The main template file
 * @link https://codex.wordpress.org/
 *
 * @package _s
 */

/** Template Name: Đăng ký */
get_header(); ?>
<div class="margin-auto">
    <div class="modal-body popup-signup">
        <div class="auth-wrapper-left">
            <div class="auth-content">
                <h3>
                    Đăng ký tài khoản</h3>
                <div class="errorContainer error-message"></div>
                <?php if(is_user_logged_in()) { $user_id = get_current_user_id();$current_user = wp_get_current_user();$profile_url = get_author_posts_url($user_id);$edit_profile_url = get_edit_profile_url($user_id); ?>
                    <div class="regted">
                        Bạn đã đăng nhập với tên nick <a href="<?php echo $profile_url ?>"><?php echo $current_user->display_name; ?></a> Bạn có muốn <a style="color: red" href="<?php echo esc_url(wp_logout_url($current_url)); ?>">Thoát</a> không ?
                    </div>
                <?php } else { ?>
                    <div class="dangkytaikhoan">
                        <?php $err = '';
                        $success = '';
                        global $wpdb, $PasswordHash, $current_user, $user_ID;
                        if (isset($_POST['task']) && $_POST['task'] == 'register') {
                            if (!$_POST["g-recaptcha-response"]) {
                                $err = 'Vui lòng tích vào ô Recaptcha!.';
                            } else {
                                $pwd1 = $wpdb->escape(trim($_POST['pwd1']));
                                $pwd2 = $wpdb->escape(trim($_POST['pwd2']));
                                $email = $wpdb->escape(trim($_POST['email']));
                                $user_phone = $wpdb->escape(trim($_POST['user_phone']));
                                $username = $wpdb->escape(trim($_POST['username']));

                                if ($email == "" || $pwd1 == "" || $pwd2 == "" || $username == "") {
                                    $err = 'Vui lòng không bỏ trống những thông tin bắt buộc!';
                                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $err = 'Địa chỉ Email không hợp lệ!.';
                                } else if (email_exists($email)) {
                                    $err = 'Địa chỉ Email đã tồn tại!.';
                                } else if (email_exists($username)) {
                                    $err = 'Tên tài khoản đã tồn tại!.';
                                } else if ($pwd1 <> $pwd2) {
                                    $err = '2 Password không giống nhau!.';
                                } else {
                                    $user_id = wp_insert_user(
                                        array('user_pass' => apply_filters('pre_user_user_pass', $pwd1),
                                            'user_login' => apply_filters('pre_user_user_login', $username),
                                            'user_email' => apply_filters('pre_user_user_email', $email),
//                                    'role' => 'subscriber'
                                        )
                                    );
                                    update_user_meta($user_id, 'user_phone', esc_attr($user_phone));
                                    if (is_wp_error($user_id)) {
                                        $err = 'Error on user creation.';
                                    } else {
                                        do_action('user_register', $user_id);
                                        $success = 'Bạn đã đăng ký thành công!';
                                    }
                                }
                            }
                        }
                        ?>
                        <!--display error/success message-->
                        <div id="message">
                            <?php
                            if(! empty($err) ) :
                                echo ''.$err.'';
                            endif;
                            ?>
                            <?php
                            if(! empty($success) ) :
                                $login_page  = get_home_url().'/dang-nhap';
                                echo ''.$success. ' Đăng nhập';
                            endif;
                            ?>
                            <form class="form-horizontal" method="post" role="form">
                                <div class="form-group">
                                    <label class="control-label  col-sm-3" for="username">Tên đăng nhập:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Tên Đăng nhập">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email"  placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="phone">Số điện thoại:</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="user_phone"  placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="pwd1">Mật khẩu:</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="pwd1" id="pwd1" placeholder="Nhập password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="pwd2">Nhập lại Mật khẩu:</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="Nhập lại password">
                                    </div>
                                </div>
                                <div class="form-group" style="padding-left: 143px">
                                    <div class="g-recaptcha" data-sitekey="6LdEK5MUAAAAAHiPhUAEQ19cdr_u7IaREGZbkrDB"></div>
                                </div>
                                <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary" style="width: 100%">Đăng ký</button>
                                        <input type="hidden" name="task" value="register" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="auth-wrapper-right">
                        <h3>
                            Quyền lợi khi đăng ký thành viên</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle"></i> Hưởng chính sách giá đặc biệt cho thành viên</li>
                            <li><i class="fas fa-check-circle"></i> Mua hàng nhanh chỉ với 1 nhấp chuột</li>
                            <li><i class="fas fa-check-circle"></i> Sản phẩm đa dạng</li>
                            <li><i class="fas fa-check-circle"></i> Đổi trả dễ dàng</li>
                            <li><i class="fas fa-check-circle"></i> Đăng ký tích điểm để được hoàn tiền lên đến 3% vào thẻ VinID</li>
                        </ul>

                    </div>
                <?php } ?>
            </div>
        </div></div>
</div>

<?php get_footer(); ?>
