<template>
    <MenuLayout>
        <div class="row p-3">
            <div class="col-lg-12">
                <div class="row bg-dark rounded mb-3 p-2">
                    <div class="col-lg-12">
                        <div class="row mb-3 mt-3 p-2">
                            <div class="col-lg-12 p-0">
                                <p class="text-white mb-2 mt-2 ms-2 fs-2 me-2">Painel de Orçamento</p>
                                <hr class="m-0" style="border-top-width: 2px; border-color: rgb(255,255,255);">
                                <div class="row mt-2 ms-2 me-2 mb-2">
                                    <div class="col-lg-3">
                                        <label for="calculoOrcamento" class="form-label text-white">Valor para
                                            Calculo:</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-dark text-gold border-gold">R$</span>
                                            <input id="calculoOrcamento" type="number" v-model="valorOrcamento"
                                                step="0.1" class="form-control bg-dark text-white border-gold"
                                                aria-label="Valor para orçar">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-flex justify-content-evenly">
                                        <div>
                                            <label for="calculoJurosCompostos" class="form-label text-white">Juros por
                                                ano
                                            </label>
                                            <div class="input-group mb-3">
                                                <input id="calculoJurosCompostos" type="number" v-model="jurosAno"
                                                    step="1" class="form-control bg-dark text-white border-gold"
                                                    aria-label="Juros por ano">
                                                <span class="input-group-text bg-dark text-gold border-gold">%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-flex justify-content-evenly">
                                        <div>
                                            <label for="anosInvestidos" class="form-label text-white">Anos de
                                                investimento
                                            </label>
                                            <div class="input-group mb-3">
                                                <input id="anosInvestidos" type="number" v-model="anosInvestidos"
                                                    min="0" step="1" class="form-control bg-dark text-white border-gold"
                                                    aria-label="Anos investidos">
                                                <span class="input-group-text bg-dark text-gold border-gold"
                                                    v-if="anosInvestidos > 1"> Anos</span>
                                                <span class="input-group-text bg-dark text-gold border-gold" v-else>
                                                    Ano</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-flex align-items-center mt-3">
                                        <button type="button" @click="calcularJurosCompostos"
                                            class="btn btn-primary bg-dark border-gold">
                                            <i class="bi bi-bar-chart-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between p-2">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-11 p-3">
                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <label for="gastosFixos"
                                                    class="form-label text-white mb-0 fw-bold fsrem-1">Gastos
                                                    Fixos</label>
                                                <div class="row">
                                                    <div class="col-lg-10 d-flex align-items-center">
                                                        <input type="range" v-model="gastosFixos"
                                                            :max="100 - (Number(luxos) + Number(investimentos) + Number(conhecimento))"
                                                            class="slider w-100 range-gold" id="gastosFixos">
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <span class="ms-2 text-gold fs-3">{{ gastosFixos }}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <label for="luxos"
                                                    class="form-label text-white mb-0 fw-bold fsrem-1">Luxos</label>
                                                <div class="row">
                                                    <div class="col-lg-10 d-flex align-items-center">
                                                        <input type="range" v-model="luxos"
                                                            :max="100 - (Number(gastosFixos) + Number(investimentos) + Number(conhecimento))"
                                                            class="slider w-100 range-gold" id="luxos">
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <span class="ms-2 text-gold fs-3">{{ luxos }}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <label for="investimentos"
                                                    class="form-label text-white mb-0 fw-bold fsrem-1">Investimento</label>
                                                <div class="row">
                                                    <div class="col-lg-10 d-flex align-items-center">
                                                        <input type="range" v-model="investimentos"
                                                            :max="100 - (Number(luxos) + Number(gastosFixos) + Number(conhecimento))"
                                                            class="slider w-100 range-gold" id="investimentos">
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <span class="ms-2 text-gold fs-3">{{ investimentos }}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <label for="conhecimento"
                                                    class="form-label text-white mb-0 fw-bold fsrem-1">Conhecimento</label>
                                                <div class="row">
                                                    <div class="col-lg-10 d-flex align-items-center">
                                                        <input type="range" v-model="conhecimento"
                                                            :max="100 - (Number(investimentos) + Number(luxos) + Number(gastosFixos))"
                                                            class="slider w-100 range-gold" id="conhecimento">
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <span class="ms-2 text-gold fs-3">{{ conhecimento }}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 p-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12"><span class="fsrem-1 text-white">Gastos Fixos</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="fs-3 text-gold">
                                                    R$ {{ (valorOrcamento * gastosFixos / 100).toFixed(2) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12"><span class="fsrem-1 text-white">Luxos</span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="fs-3 text-gold">
                                                    R$ {{ (valorOrcamento * luxos / 100).toFixed(2) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12"><span class="fsrem-1 text-white">Investimentos</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="fs-3 text-gold">
                                                    R$ {{ (valorOrcamento * investimentos / 100).toFixed(2) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12"><span class="fsrem-1 text-white">Conhecimento</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="fs-3 text-gold">
                                                    R$ {{ (valorOrcamento * conhecimento / 100).toFixed(2) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-dark rounded mt-3 d-flex justify-content-between p-2 pb-4">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12 p-0">
                                <p class="text-white mb-2 mt-2 ms-2 fs-2 me-2">Calculo de Juros Compostos</p>
                                <hr class="m-0" style="border-top-width: 2px; border-color: rgb(255,255,255);">
                                <div class="row mt-2 ms-2 me-2">
                                    <div class="col-lg-12">
                                        <div class="row justify-content-around mt-3">
                                            <div class="col-lg-3">
                                                <span class="fs-5 text-white">Total: </span>
                                                <div class="me-0 ps-3 pe-3 pt-2 pb-2 rounded border-gold">
                                                    <span class="text-gold fs-4">R$ {{
                                                jurosDuranteTempo.totalPatrimonio.toFixed(2) }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <span class="fs-5 text-white">Total Investido: </span>
                                                <div class="me-0 ps-3 pe-3 pt-2 pb-2 rounded border-gold">
                                                    <span class="text-gold fs-4">R$ {{
                                                        jurosDuranteTempo.totalInvestido.toFixed(2) }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <span class="fs-5 text-white">Total em Juros: </span>
                                                <div class="me-0 ps-3 pe-3 pt-2 pb-2 rounded border-gold">
                                                    <span class="text-gold fs-4">R$ {{
                                                        jurosDuranteTempo.totalJuros.toFixed(2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MenuLayout>
</template>

<script>
import { defineComponent } from "vue";
import MenuLayout from "../layouts/MenuLayout.vue";

export default defineComponent({
    components: {
        MenuLayout,
    },
    props: [],
    data() {
        return {
            valorOrcamento: 0,
            gastosFixos: 0,
            luxos: 0,
            investimentos: 0,
            conhecimento: 0,
            somaPorcent: 0,
            anosInvestidos: 1,
            jurosAno: 0,
            jurosDuranteTempo: {
                totalInvestido: 0,
                totalJuros: 0,
                totalPatrimonio: 0
            },
        };
    },
    methods: {
        calcularJurosCompostos() {
            this.jurosDuranteTempo.totalInvestido = 0;
            this.jurosDuranteTempo.totalPatrimonio = 0;
            this.jurosDuranteTempo.totalJuros = 0;

            let jurosTempo = [];
            let valorInvestimento = this.valorOrcamento * this.investimentos / 100
            let patrimonioAnterior;
            let jurosAnterior;

            let meses = this.anosInvestidos*12;
            for (let i = 0; i < meses; i++) {
                this.jurosDuranteTempo.totalInvestido += valorInvestimento;

                patrimonioAnterior = this.jurosDuranteTempo.totalPatrimonio + valorInvestimento;
                this.jurosDuranteTempo.totalPatrimonio = patrimonioAnterior * (() ** this.anosInvestidos)
                jurosTempo.push(
                    {
                        totalPatrimonioAno: this.jurosDuranteTempo.totalPatrimonio,
                        totalJurosAno: this.jurosDuranteTempo.totalJuros,
                        totalInvestidoAno: this.jurosDuranteTempo.totalInvestido
                    }
                );

                console.log(
                    patrimonioAnterior,
                    this.jurosDuranteTempo.totalPatrimonio,
                    this.jurosDuranteTempo.totalJuros,
                    this.jurosDuranteTempo.totalInvestido)
            }

            console.log(jurosTempo);
        },
    }
});
</script>