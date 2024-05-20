<template>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <header>
                    <nav class="navbar bg-body-tertiary pt-0 pb-0 fixed-top">
                        <div class="container-fluid shadow-sm ps-4 pt-0 pb-0 pe-4">
                            <div class="navbar-brand d-flex alig-items-end" href="#">
                                <img class="me-1 p-1" style="width: 3em;" src="/images/icone_menu.svg" />
                                <span class="fs-2 pt-2">Leprechaun</span>
                            </div>
                            <!-- toggler -->
                            <button class="btn float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                                role="button">
                                <i class="bi bi-list fs-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
                            </button>
                        </div>
                    </nav>
                    <div class="offcanvas bg-dark border-start-gold offcanvas-end" style="width: 15%;" tabindex="-1" id="offcanvas"
                        data-bs-keyboard="false" data-bs-backdrop="false">
                        <div class="offcanvas-header justify-content-between">
                            <h6 class="offcanvas-title text-gold d-none d-sm-block" id="offcanvas">Menu</h6>
                            <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="#FFD700" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                </svg></button>
                        </div>
                        <div class="offcanvas-body bg-dark px-0">
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
                                <li class="nav-item ms-3">
                                    <a href="/" class="nav-link text-gold ps-0 hover-underline-animation text-truncate">
                                        <i class="fs-3 bi-house"></i><span class="ms-1 d-none d-sm-inline">Início</span>
                                    </a>
                                </li>
                                <li class="nav-item ms-3">
                                    <a href="/orcamento"
                                        class="nav-link ps-0 text-gold hover-underline-animation text-truncate">
                                        <i class="fs-3 bi bi-safe2 "></i><span class="ms-1">Orçamento</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-footer">
                            <div class="row">
                                <div class="col-sm-12 ps-4 pb-2 d-flex justify-content-start">
                                    <span class="text-gold">ícones por <a target="_blank" class="text-gold"
                                            href="https://icons8.com">Icons8</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Conteudo da pagina -->
                    <main class="container-fluid pe-0" style="margin-top: 7vh;">
                        <slot></slot>
                    </main>
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