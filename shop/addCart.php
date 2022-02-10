<?php
session_start();
// session_unset();

if ($_POST['action'] == 'add') {
    $total = $_POST['pm_price'] * $_POST['quantity'];
    $isInArray = false;

    $carts = array(
        "pm_id" => $_POST['pm_id'],
        "pm_name" => $_POST['pm_name'],
        "quantity" => $_POST['quantity'],
        "pm_price" => $_POST['pm_price'],
        "img_name" => $_POST['img_name'],
        "color" => $_POST['color'],
        "total" => $total,
    );

    if (!isset($_SESSION['carts'])) {
        $_SESSION['carts'] = array();
        array_push($_SESSION['carts'], $carts);
        header('location: cart.php');
        exit();
    } else {
        $isInArray = in_array($carts['color'], array_column($_SESSION['carts'], 'color'));
    }

    if ($isInArray) {
        foreach ($_SESSION['carts'] as $key => $row) {
            if ($row['color'] == $carts['color']) {
                $_SESSION['carts'][$key]['quantity'] += $carts['quantity'];
            }
        }
    } else {
        array_push($_SESSION['carts'], $carts);
    }

    header('location: cart.php');
}

if ($_POST['action'] == 'clearCart') {
    session_start();
    session_unset();
    header('location: cart.php');
}

if ($_POST['action'] == 'del') {
    session_start();
    array_splice($_SESSION['carts'], $_POST['index'], 1);
    header('location: cart.php');
}

if ($_POST['action'] == 'edit') {
    if (isset($_POST['plus'])) {
        foreach ($_SESSION['carts'] as $key => $row) {
            if ($row['pm_id'] == $_POST['pm_id'] && $row['color'] == $_POST['color']) {
                $_SESSION['carts'][$key]['quantity']++;
                header('location: cart.php');
            }
        }
    }

    if (isset($_POST['minus'])) {
        foreach ($_SESSION['carts'] as $key => $row) {
            if ($row['pm_id'] == $_POST['pm_id'] && $row['color'] == $_POST['color']) {
                $_SESSION['carts'][$key]['quantity']--;
                header('location: cart.php');
            }
        }
    }
}
