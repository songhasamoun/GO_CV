<?php
$data = array();
flexible_function($data);

function flexible_function(&$data) {
    $function = 'home';
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}

// function login(&$data) {
//     if(!isset($_SESSION['uname'])){
//         $data['page'] = 'login';
//     }else {
//         $data['page'] = 'employee/view';
//         $data['employee_data'] = m_get_data();
//     }
// }

function home(&$data) {
    $data['page'] = 'pages/home_page';
}
function studentinfo(&$data) {
    $data['page'] = 'pages/student_information';
}
function normal(&$data) {
    $data['page'] = 'roles/normal-dashboard';
}