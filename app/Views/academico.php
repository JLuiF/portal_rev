<?= $this->extend('layout\header') ?>

<?= $this->section('content') ?>

<!--Contenido-->
<section class="container text-center">
    <div class="row mx-auto">
        <h2 class="col text-center pt-3 pt-sm-4 mt-5 mt-sm-3" id="titulo_t">Revista de Investigación</h2>
        <div class="col-12 text-center text-sm-left d-flex justify-content-center">
            <p class="text-center text-lg-center" id="text_p">Publicamos diferente tipos de revistas con el fin de
                difundir nuestros resultados y avances sobre el contexto andino y otros, que sean de
                interes de diferentes personas (docentes, alumnos, público en general).</p>
        </div>
        <div class="col-auto mx-auto home-filtro-width">
            <div class="row d-flex justify-content-center pt-3">
                <p class="col-auto">Tema de Interes:</p>
                <div class="col-sm-8 col-xl-5">
                    <select class="container-select custom-select home-filtro-select text-left" id="selectTema">
                        <option value="todos">Tema <i class="fa-solid fa-chevron-down" style="color: #000000;"></i>
                        </option>
                        <option value="ciencias-sociales">Ciencias Sociales</option>
                    </select>
                </div>
                <!--<div class="w-100 my-3"></div>-->
                <!--Prueba Flip Card-->
                <div class="w-100 my-3"></div>
                <section class="container text-center" id="paginated-content">
                    <!-- Grupo de imágenes para la página 1 (contenido original) -->
                    <div class="row mx-auto page" data-page="1">
                        <div class="container_card">
                            <div class="row mx-auto d-flex justify-content-center">
                                <div class="col-auto mb-4 card-item" data-tema='["ciencias-sociales",""]'>
                                    <div class="card card-flip h-100 border border-primary">
                                        <div class="card_img card-front text-white bg-warning">
                                            <img
                                                src="https://image.isu.pub/230123020824-584fe6ef252a538dbe3e1fe9bb3329fb/jpg/page_1_thumb_large.jpg">
                                        </div>
                                        <div class="card-back bg-white border border-primary">
                                            <div class="card-body">
                                                <div class="modubene-slide-links">
                                                    <h3 class="card-title"><a
                                                            href="https://issuu.com/search?q=undiversidad">
                                                            REVISTA ACADEMICA CULTURAL</a></h3>
                                                    <p class="card-text mb-1 text-left" id="text_rev">Tema: Cultural
                                                    </p>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--paginacion pruebita-->
                        </div>
                    </div>
            </div>
            <!--Fin de Prueba-->
</section>
</div>
</section>
<div class="w-100 my-3"></div>
<?= $this->include('layout\footer') ?>
<?= $this->endSection() ?>