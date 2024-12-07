<?php
// Lấy giá trị từ URL với giá trị mặc định
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

// Chuyển đổi tên controller thành chuẩn PascalCase
$controllerClass = ucfirst($controller) . 'Controller';
$controllerFile = "controllers/$controllerClass.php";

// Kiểm tra xem file controller có tồn tại không
if (file_exists($controllerFile)) {
    require_once $controllerFile;

    // Kiểm tra class controller có tồn tại không
    if (class_exists($controllerClass)) {
        $instance = new $controllerClass();

        // Kiểm tra method của controller có tồn tại không
        if (method_exists($instance, $action)) {
            // Gọi phương thức với tham số ID (nếu có)
            $id = $_GET['id'] ?? null;
            $instance->$action($id);
        } else {
            http_response_code(404);
            echo "Error 404: Action không tồn tại.";
        }
    } else {
        http_response_code(404);
        echo "Error 404: Controller không tồn tại.";
    }
} else {
    http_response_code(404);
    echo "Error 404: File controller không tìm thấy.";
}
?>
