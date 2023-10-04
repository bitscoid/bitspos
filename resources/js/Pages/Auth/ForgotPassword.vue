<template>
    <Head>
        <title>Forgot Password - BITS POS</title>
    </Head>

    <LayoutAuth>
        <div class="col-md-4">
            <div class="fade-in">
                <div class="text-center mb-4">
                    <a href="" class="text-dark text-decoration-none">
                        <img src="/images/logo.png" width="70" />
                        <h3 class="mt-2 font-weight-bold">BITS POS</h3>
                    </a>
                </div>
                <div class="card-group">
                    <div class="card border-top-purple border-0 shadow-sm rounded-3">
                        <div class="card-body">
                            <div class="text-start">
                                <h5>Reset Password</h5>
                            </div>
                            <hr />
                            <div v-if="session.status" class="alert alert-success mt-2">
                                {{ session.status }}
                            </div>
                            <form @submit.prevent="submit">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input
                                        class="form-control"
                                        v-model="form.email"
                                        :class="{ 'is-invalid': errors.email }"
                                        type="email"
                                        placeholder="Email Address"
                                    />
                                </div>
                                <div v-if="errors.email" class="alert alert-danger">
                                    {{ errors.email }}
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary shadow-sm rounded-sm px-4 w-100" type="submit">
                                            Send Reset Password Link
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </LayoutAuth>
</template>

<script setup>
    import LayoutAuth from "../../Layouts/Auth.vue";
    import { reactive } from "vue";
    import { Inertia } from "@inertiajs/inertia";
    import { Link, Head } from "@inertiajs/inertia-vue3";
    const props = defineProps({
        errors: Object,
        session: Object,
    });
    const form = reactive({
        email: "",
    });
    const submit = () => Inertia.post("/forgot-password", form);
</script>