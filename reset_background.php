<?php
require_once 'config.php';

unset($_COOKIE['backgroundImageURL']);

unset($_COOKIE['backgroundImageSourceURL']);

unset($_COOKIE['backgroundImagePosition']);

setcookie(
    'backgroundImageURL',
    null,
    SOMETIME_IN_THE_PAST
);

setcookie(
    'backgroundImageSourceURL',
    null,
    SOMETIME_IN_THE_PAST
);

setcookie(
    'backgroundImagePosition',
    null,
    SOMETIME_IN_THE_PAST
);

header('Location: ' . APP_URL_PREFIX);
