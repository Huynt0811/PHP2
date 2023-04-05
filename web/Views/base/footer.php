<footer class="alert alert-danger text-center fixed-bottom">
    &copy;2023
</footer>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

// $msg = "Đăng ký thành công";
?>
<?php

// Kiểm tra xem biến phiên 'user' có tồn tại hay không
// if (isset($_SESSION['user'])) {
//     // Người dùng đã đăng nhập
//     $msg = "Đăng Nhập thành công";
// } else {
//     // Người dùng chưa đăng nhập
//     $msg = "Bạn chưa đăng nhập!";
// }
// ?>
<script>
    swal("<?= $msg ?>");
</script>
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js
"></script>
</body>

</html>