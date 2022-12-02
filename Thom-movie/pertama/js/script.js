function cariFilm() {
    $("#daftar-film").html("");
    $.ajax({
        url: "http://www.omdbapi.com",
        type: "get",
        dataType: "json",
        data: {
            apikey: "369635b6",
            s: $("#input-cari").val(),
        },
        success: function (result) {
            if (result.Response == "True") {
                let films = result.Search;

                $.each(films, function (i, data) {
                    $("#daftar-film").append(
                        `
                        <div class="col-md-3">
                            <div class="card mb-3" >
                            <img src=` +
                            data.Poster +
                            ` class="card-img-top" alt=` +
                            data.Title +
                            `>
                            <div class="card-body">
                            <h5 class="card-title">` +
                            data.Title +
                            `</h5>
                            <h6 class="card-subtitle mb-2 text-muted">` +
                            data.Year +
                            `</h6>
                            <a href="#" class="card-link btn btn-primary lihat-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="` +
                            data.imdbID +
                            `">Lihat Detail</a>
                            </div>
                            </div>
                        </div>
                    `
                    );
                });

                $("#input-cari").val();
            } else {
                $("#daftar-film").html(`
                    <div class="col">
                        <h1 class='text-center'>Film tidak ditemukan!</h1>
                    </div>
                `);
            }
        },
    });
}

$("#tombol-cari").on("click", function () {
    cariFilm();
});

$("#input-cari").on("keyup", function (e) {
    if (e.keyCode === 13) {
        cariFilm();
    }
});

$("#daftar-film").on("click", ".lihat-detail", function () {
    $.ajax({
        url: "http://www.omdbapi.com",
        type: "get",
        dataType: "json",
        data: {
            apikey: "369635b6",
            i: $(this).data("id"),
        },
        success: function (film) {
            if (film.Response == "True") {
                $(".modal-body").html(
                    `
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-4">
                        <img src="` +
                        film.Poster +
                        `" class="img-fluid">
                        </div>

                        <div class="col-md-8">
                        <ul class="list-group">
                        <li class="list-group-item"><h3>` +
                        film.Title +
                        `</h3></li>

                        <li class="list-group-item">Released : ` +
                        film.Released +
                        `</li>

                        <li class="list-group-item">Genre : ` +
                        film.Genre +
                        `</li>

                        <li class="list-group-item">Director : ` +
                        film.Director +
                        `</li>

                        <li class="list-group-item">Actors : ` +
                        film.Actors +
                        `</li>

                        </ul>
                        </div>
                        </div>
                    </div>
                `
                );
            } else {
            }
        },
    });
});
