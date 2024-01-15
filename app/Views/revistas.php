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
                        <select class="container-select custom-select home-filtro-select text-left" id="selectTema" name="categoria">
                            <option value="todos">Tema <i class="fa-solid fa-chevron-down" style="color: #000000;"></i></option>
                            <option value="1">Agrarias</option><option value="2">Biológicas</option><option value="3">Exactas y de la Tierra</option><option value="4">Humanas</option><option value="5">Ingeniería</option><option value="6">Lingüística, Letras y Artes</option><option value="7">Salud</option><option value="8">Sociales Aplicadas</option>                        </select>
                    </div>
                    <!--Prueba Flip Card-->
                    <div class="w-100 my-3"></div>
                    <section class="container text-center" id="paginated-content">
                        <div class="container_card">
                            <div class="row mx-auto d-flex justify-content-center">
                                    <div class="col-auto mb-4 card-item" data-tema='["1",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/ria.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="https://huajsapata.unap.edu.pe/index.php/ria">
                                                                Revista de Investigaciones Altoandinas</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias Agrícolas                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/comunicacion.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="https://comunicacionunap.com/index.php/rev">
                                                                Comuni@cion Revista de Investigación en Comunicación y Desarrallo</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales, Humanidades                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["3",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/posgrado.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/epg/index.php/investigaciones">
                                                                Revista de Investigaciones de la Escuela de Posgrado de la UNA PUNO</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias Naturales (menos Biología)                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/derecho.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/rd/">
                                                                Revista de Derecho de la Universidad Nacional del Altiplano de Puno</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/derecho_pacha.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="https://fcjp.derecho.unap.edu.pe/rp/">
                                                                Revista Pacha: Derecho y visiones</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/derecho_ambiental.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://fcjp.derecho.unap.edu.pe/rambiental/">
                                                                Revista académica de derecho ambiental y ecologia</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/trabajosyf.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistatsyf.com">
                                                                Revista Iberoamericana en Trabajo Social y Familia</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["1",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/bovinos_ovinos.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe">
                                                                Revista del Instituto de Investigación de Bovinos y Ovinos</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias Agrícolas                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["1",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/allpaka.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/ALPAK">
                                                                Allpa´ka</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias Agrícolas                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/semestre_economico.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://semestreeconomico.unap.edu.pe">
                                                                Semestre Económico</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/taypi_arqui.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/TAYPI">
                                                                Revista de Arquitectura y Urbanismo TAYPI (RAU+TAYPI)</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/educa_ciencias_sociales.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/RIEDCA">
                                                                Revista de Investigación Educativa y Ciencias Sociales</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/educa_innova_tecno.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/RIE">
                                                                Revista Educativa de Innovación y Tecnología</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/educa_ciencias_naturales.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/RCCNN">
                                                                Ciencias Naturales</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/muhumchik.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/antroa/index.php/ANTRO">
                                                                Antropologia Andina Muhunchik-Jathasa</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/inves_intercul.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://www.revistarii.com">
                                                                Revista de Investigaciones Interculturales</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales, Humanidades                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/cues_sociologia.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/csociologia/index.php/csociologia">
                                                                Cuestiones de Sociologia</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/inves_empresariales.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/RIC/index ">
                                                                Revista de Investigaciones Empresariales</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Sociales Aplicadas                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/inves_gestion_finanzas.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/RIGF ">
                                                                Revista de Investigación en Gestión y Finanzas (RIGF)</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias sociales                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                  <div class="col-auto mb-4 card-item" data-tema='["5",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/ciencia_ing_sistemas.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/huajsapata/index.php/CIS ">
                                                                Revista de Investigación en Ingenieria de Sistemas</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ingeniería, Tecnología                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                      <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/rev_ciencias_sociales.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/ciensoc/index.php/RICCS ">
                                                                Revista de Investigación Científica en Ciencias Sociales</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Sociales Aplicadas                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                   <div class="col-auto mb-4 card-item" data-tema='["8",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/allin_quilkay.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/allin/index.php/allin/about ">
                                                                Revista de Investigación Cientifica en Sociología y Ciencias Sociales "ALLIN QUILCAY"</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Sociales Aplicadas                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                       <div class="col-auto mb-4 card-item" data-tema='["7",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/estomatologica.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/huajsapata/index.php/REA ">
                                                                Revista Estomatológica del Altiplano</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias médicas, ciencias de la salud                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                      <div class="col-auto mb-4 card-item" data-tema='["1",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/ciencia_agraria.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/RCAGRA ">
                                                                Revista de Ciencias Agrarías</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias Agrícolas                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                         <div class="col-auto mb-4 card-item" data-tema='["7",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/nutricion_salud.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe">
                                                                Revista de Investigación Nutricion, Alimentación y Salud</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias médicas, ciencias de la salud                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    <div class="col-auto mb-4 card-item" data-tema='["3",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/geociencia.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/GEOCIENCIAS ">
                                                                GEOCIENCIAS</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ciencias Naturales (menos Biología)                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                         <div class="col-auto mb-4 card-item" data-tema='["5",""]'>
                                        <div class="card card-flip h-100 border border-primary">
                                            <div class="card_img card-front text-white bg-warning">
                                                <img src="<?= base_url('public/frontend'); ?>/img/portadas/kipu.jpg">
                                            </div>
                                            <div class="card-back bg-white border border-primary">
                                                <div class="card-body">
                                                    <div class="modubene-slide-links">
                                                        <h3 class="card-title"><a href="http://revistas.unap.edu.pe/journal/index.php/FINESI ">
                                                                KIPU</a></h3>
                                                        <p class="card-text mb-1 text-left" id="text_rev">
                                                            Ingeniería, Tecnología                                                        </p>
                                                        <p class="cb-p1 mt-2 mb-1 pt-1 border-top text-left" id="text_rev">Indexado:</p>
                                                        <div style="text-align:center" class="rev_img">
                                                            <img src="https://revistaenfoques.org/public/site/images/masteradmin/dialnet.png" id="dialnet">
                                                            <img src="https://huajsapata.unap.edu.pe/public/site/images/fmamani/scielo.png" id="scielo">
                                                            <img src="https://doajournals.files.wordpress.com/2020/01/doaj_transparent.png" id="doaj">
                                                            <img src="https://www.latindex.org/latindex/images/logo_latindex.png">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                     </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="pagination text-center mt-4">
        </div>
</section>
<div class="w-100 my-3"></div>

<?= $this->include('layout\footer') ?>
<?= $this->endSection() ?>