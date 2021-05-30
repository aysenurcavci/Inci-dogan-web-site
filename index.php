

<?php

ob_start();

if (!isset ($_GET ['sayfa'])) {
    $_GET['sayfa'] = 'index';
}

switch($_GET['sayfa']) {

    case 'index':
        require_once 'home.php';

        break;

    case 'hakkimda':
        require_once 'hakkimda.php';

        break;

    case 'calismaAlanlari':
        require_once 'calisma_alanlari.php';

        break;

    case 'galeri':
        require_once 'galeri.php';

        break;

    case 'sorular':
        require_once 'sorular.php';

        break;

    case 'makale':
        require_once 'makale.php';

        break;

    case 'iletisim':
        require_once 'iletisim.php';

        break;

}

?>
