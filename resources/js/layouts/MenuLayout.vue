<template>
    <div class="row container-fluid">
        <div class="col-12">
            <div class="row">
                <header>
                    <nav class="navbar bg-body-tertiary fixed-top">
                        <div class="container-fluid ps-4 pe-4">
                            <div class="navbar-brand d-flex alig-items-end" href="#">
                                <img class="me-1 p-1" style="width: 4em;" src="/images/icone_menu.svg" />
                                <span class="fs-1 pt-3">Leprechaun</span>
                            </div>
                            <!-- toggler -->
                            <button class="btn float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                                role="button">
                                <i class="bi bi-arrow-right-square-fill fs-3" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas"></i>
                            </button>
                        </div>
                    </nav>
                    <div class="offcanvas offcanvas-end" style="width: 15%;" tabindex="-1" id="offcanvas" data-bs-keyboard="false"
                    data-bs-backdrop="false">
                    <div class="offcanvas-header">
                        <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</h6>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body px-0">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
                            <li class="nav-item ms-3">
                                <a href="/" class="nav-link text-dark ps-0 hover-underline-animation text-truncate">
                                    <i class="fs-3 bi-house"></i><span class="ms-1 d-none d-sm-inline">Início</span>
                                </a>
                            </li>
                            <li class="nav-item ms-3">
                                <a href="/orcamento" class="nav-link ps-0 text-dark hover-underline-animation text-truncate">
                                    <i class="fs-3 bi bi-safe2"></i><span
                                        class="ms-1">Orçamento</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                </header>
            </div>
            <div class="row">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col py-3">
                            <!-- Conteudo da pagina -->
                            <main class="container" style="margin-top: 7vh;">
                                <slot></slot>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</template>
<script>
export default {
    components: {
    },
    methods: {

    },
    mounted() {
    },
    props: [],
    data() {
        return {
        };
    },
    methods: {}
};
</script>