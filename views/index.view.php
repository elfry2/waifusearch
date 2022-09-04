<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= APP_NAME ?></title>
  <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="icons/bootstrap-icons.css">
  <style>
    html,
    body {
      height: 100%;
    }

    body {
      background-image: url('<?= $_COOKIE['backgroundImageURL'] ?: DEFAULT_BACKGROUND_IMAGE_URL ?>');
      background-position: <?= $_COOKIE['backgroundImagePosition'] ?: DEFAULT_BACKGROUND_IMAGE_POSITION ?>;
      background-repeat: no-repeat;
      background-size: cover;
    }

    a {
      text-decoration: none;
    }

    #searchQueryForm {
      max-width: 36em;
    }
  </style>
</head>

<body>
  <div class="container h-100 align-items-end">
    <div class="row h-100 align-items-end">
      <div class="mx-auto pb-2" id="searchQueryForm">
        <form action="https://www.ecosia.org/search">
          <div class="input-group mb-1 shadow">
            <input type="text" name="q" class="form-control border-secondary border-end-0" placeholder="Uses Ecosia - the search engine that plants trees" aria-label="Search anything..." aria-describedby="button-addon2" required autofocus>
            <button class="btn btn-link bg-white text-dark border-secondary border-start-0 border-end-0" type="submit" id="button-addon2"><i class="bi-search"></i></button>
            <button class="btn btn-link bg-white text-dark border-secondary border-start-0 dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#changeBackgroundModal">Change background</a></li>
              <li><a class="dropdown-item" href="<?= $_COOKIE['backgroundImageSourceURL'] ?: DEFAULT_BACKGROUND_IMAGE_SOURCE_URL ?>" target="_blank" rel="noopener noreferrer">Visit source</a></li>
            </ul>
          </div>
        </form>
        <div class="modal fade" id="changeBackgroundModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Change background</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="set_background.php" method="POST">
                <div class="modal-body">
                  <div class="mb-3">
                    <b>URL to the image</b>
                    <input type="text" name="imageURL" class="form-control" placeholder="https://" value="<?= $_COOKIE['backgroundImageURL'] ?: DEFAULT_BACKGROUND_IMAGE_URL ?>" required>
                  </div>
                  <div class="mb-3">
                    <b>URL to the source of the image</b>
                    <input type="text" name="imageSourceURL" class="form-control" placeholder="https://" value="<?= $_COOKIE['backgroundImageSourceURL'] ?: DEFAULT_BACKGROUND_IMAGE_SOURCE_URL ?>" required>
                  </div>
                  <div class="d-flex flex-row mb-3">
                    <b class="flex-grow-1">Position</b>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="imagePosition" value="top" id="flexRadioDefault1" <?= ($_COOKIE['backgroundImagePosition'] == 'top') ? 'checked' : '' ?>>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Top
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="imagePosition" value="center" id="flexRadioDefault2" <?= (!$_COOKIE['backgroundImagePosition'] || $_COOKIE['backgroundImagePosition'] == 'center') ? 'checked' : '' ?>>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Center
                      </label>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <a href="reset_background.php" class="btn">Reset</a>
                  <button type="submit" class="btn btn-primary">Change</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="scripts/bootstrap.bundle.min.js"></script>
</body>

</html>