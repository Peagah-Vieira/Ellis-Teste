<!-- Seção de Features-->
<section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-3 px-5">
                        <img width="80" height="80" src="https://cdn.agenciaellis.com.br/assets/site/img/desenvolvimento.svg">
                    </div>
                    <h2 class="h4 fw-bolder">Criação de sites</h2>
                    <p><?php 
                    foreach($servicos as $servico)
                    {?>
                        <li><?= $servico["Websites"] ?></li>
                    <?php
                    }
                    ?>
                    </p>
                    <a class="text-decoration-none" href="https://agenciaellis.com.br" target="_blank">
                        Tenho Interesse
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-3 px-5">
                        <img width="80" height="80" src="https://cdn.agenciaellis.com.br/assets/site/img/sistemas.svg">
                        </div>
                    <h2 class="h4 fw-bolder">Sistemas de gestão</h2>
                    <p><?php 
                    foreach($servicos as $servico)
                    {?>
                        <li><?= $servico["Sistemas_Online"] ?></li>
                    <?php
                    }
                    ?>
                    </p>
                    <a class="text-decoration-none" href="https://agenciaellis.com.br" target="_blank">
                        Tenho Interesse
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3 px-5">
                        <img width="80" height="80" src="https://cdn.agenciaellis.com.br/assets/site/img/marketing.svg">
                        </div>
                    <h2 class="h4 fw-bolder">Marketing digital</h2>
                    <p><?php 
                    foreach($servicos as $servico)
                    {?>
                        <li><?= $servico["Marketing_Digital"] ?></li>
                    <?php
                    }
                    ?>
                    </p>
                    <a class="text-decoration-none" href="https://agenciaellis.com.br" target="_blank">
                        Tenho Interesse
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>