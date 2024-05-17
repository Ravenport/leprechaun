<template>
    <MenuLayout>
        <div class="row">
            <div class="col-sm-12">
                <div class="row d-flex justify-content-between">
                    <div class="col-sm-7 rounded bg-dark me-2 p-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="gastosFixos" class="form-label text-white fw-bold fsrem-1">Gastos Fixos</label>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <input type="range" v-model="gastosFixos" class="slider w-100 range-gold"
                                            id="gastosFixos">
                                    </div>
                                    <div class="col-sm-1">
                                        <span class="ms-2 text-gold">{{ gastosFixos }}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="luxos" class="form-label text-white fw-bold fsrem-1">Luxos</label>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <input type="range" v-model="luxos" class="slider w-100 range-gold" id="luxos">
                                    </div>
                                    <div class="col-sm-1">
                                        <span class="ms-2 text-gold">{{ luxos }}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="investimentos" class="form-label text-white fw-bold fsrem-1">Investimento</label>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <input type="range" v-model="investimentos" class="slider w-100 range-gold"
                                            id="investimentos">
                                    </div>
                                    <div class="col-sm-1">
                                        <span class="ms-2 text-gold">{{ investimentos }}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="conhecimento" class="form-label text-white fw-bold fsrem-1">Conhecimento</label>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <input type="range" v-model="conhecimento" class="slider w-100 range-gold"
                                            id="conhecimento">
                                    </div>
                                    <div class="col-sm-1">
                                        <span class="ms-2 text-gold">{{ conhecimento }}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 rounded bg-dark ms-2 p-3"></div>
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
            gastosFixos: 100,
            luxos: 100,
            investimentos: 100,
            conhecimento: 100,
        };
    },
    methods: {}
});
</script>