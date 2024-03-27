<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="author" content="hutech">
    <link href="/KiemTraGK/site.css" rel="stylesheet" />
    <title>Quản lý nhân viên</title>
</head>

<body>
    <div id="wrapper"></div>
    <script>
        function deleteEmployee(employeeId) {
            if (confirm('Bạn có chắc muốn xóa nhân viên này không?')) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == XMLHttpRequest.DONE) {
                        if (xhr.status == 200) {
                            // Xóa hàng từ bảng
                            var row = document.getElementById("employee_row_" + employeeId);
                            row.parentNode.removeChild(row);
                        } else {
                            alert('Đã có lỗi xảy ra khi xóa nhân viên.');
                        }
                    }
                };
                xhr.open('POST', 'delete_employee.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send('employee_id=' + employeeId);
            }
        }
    </script>
</body>

</html>