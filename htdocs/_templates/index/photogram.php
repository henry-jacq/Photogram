<div class="album py-5 bg-light border">
    <div class="container p-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <? for ($i=0; $i < 12; $i++) { ?>
            <div class="col">
                <div class="card shadow border-0">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group p-2">
                                <button type="button" class="btn btn-sm btn-outline-primary"><i class="fa-regular fa-heart"></i> Like</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-regular fa-paper-plane"></i> Share</button>
                                <button type="button" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                            </div>
                            <small class="text-muted">5 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
        </div>
    </div>
</div>
