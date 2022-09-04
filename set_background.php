<?php
require_once 'config.php';

if (
    !empty($_POST['imageURL'])
    && !empty($_POST['imageSourceURL'])
    && !empty($_POST['imagePosition'])
) {
    setcookie(
        'backgroundImageURL',
        trim($_POST['imageURL']),
        IN_THE_FARTHEST_FUTURE_POSSIBLE
    );

    setcookie(
        'backgroundImageSourceURL',
        trim($_POST['imageSourceURL']),
        IN_THE_FARTHEST_FUTURE_POSSIBLE
    );

    setcookie(
        'backgroundImagePosition',
        $_POST['imagePosition'],
        IN_THE_FARTHEST_FUTURE_POSSIBLE
    );
}

header('Location: ' . APP_URL_PREFIX);
