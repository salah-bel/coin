<div class="card my-3 mx-auto" style="max-width: 650px; ">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $ad['cover'] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $ad['title'] ?></h5>
                        <p class="card-text"><?= $ad['description'] ?> </p>

                        <small class="card-text">
                            <img src="<?= $ad['author_avatar'] ?>" alt="" width="30"></small>
                        <small class="text-body-secondary">
                            <strong><?= $ad['author'] ?></strong>
                        </small>
                        le : <small class="text-body-secondary"><?= $ad['createdAt'] ?></small>

                        </small>
                    </div>
                </div>
            </div>
        </div>