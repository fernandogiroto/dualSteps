<template>
    <Head title="Dashboard" />
    <AppLayout>
        <template #content>
            <!-- Content -->
            <div class="page-body">
                <div class="container-xl">
                    <section>
                        <div class="row g-2">
                            <div class="col-7 mt-5 pb-5 mb-3 pe-5">
                                <div class="page-pretitle">
                                    Cidadania e Vistos
                                </div>
                                <h2 class="page-title-lg pe-5">
                                    Comece hoje a tratar
                                </h2>
                                <h2 class="page-title-lg pe-5"> 
                                    <span class="highlight"
                                    ><vue-typewriter-effect :strings="['Dupla Cidadania', 'Visto de Estudante']" /></span
                                ></h2>
                                <div class="markdown pe-5 me-5">
                                    Quickly design and customize
                                    responsive mobile-first sites with
                                    Bootstrap, the world’s most popular.
                                    All icons come from the Tabler Icons
                                    set.
                                </div>
                                <div class="row mt-5">
                                    <div class="col-4 mt-3">
                                        <CardIcon title="Estudante" subtitle="Visto" icon="school"></CardIcon>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <CardIcon title="Trabalho" subtitle="Visto" icon="hammer"></CardIcon>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <CardIcon title="Residência" subtitle="Visto" icon="home-check"></CardIcon>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <CardIcon title="Retirada de NIF" subtitle="Documentos" icon="id"></CardIcon>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <CardIcon title="Segurança Social" subtitle="Documentos" icon="file-description"></CardIcon>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <CardIcon title="Passaporte" subtitle="Documentos" icon="id-badge"></CardIcon>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 d-flex justify-content-end">
                                <img src="@/Assets/Images/lawyers_header.png" alt="" />
                            </div>
                        </div>
                        <div class="row row-deck row-cards">
                            <div class="col-sm-6 col-lg-5">
                                <div class="card card-md bg-light">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <h3 class="h1">Agilize seu processo</h3>
                                                <div class="markdown text-muted text-justify">
                                                    Lorem Ipsum is
                                                    simply dummy text of
                                                    the printing and
                                                    typesetting
                                                    industry. Lorem
                                                    Ipsum has been the
                                                    industry's standard
                                                    dummy text ever
                                                    since the 1500s,
                                                    when an unknown
                                                    printer took a
                                                    galley of type and
                                                    scrambled.
                                                </div>
                                                <div class="mt-3">
                                                    <a href="#" class="btn btn-primary" target="_blank" rel="noopener">
                                                        Ver Como Funciona
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-7">
                                <div class="card">
                                    <form @submit.prevent="submit">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Informações Pessoais {{form.user_another_process}}</label>
                                                                <div class="input-icon mb-3">
                                                                    <span class="input-icon-addon">
                                                                        <user-icon size="20"/>
                                                                    </span>
                                                                    <input id="name" type="text" class="form-control" v-model="form.name"
                                                                        required
                                                                        autofocus
                                                                        autocomplete="off"
                                                                        placeholder="Nome Completo"
                                                                    />
                                                                    <InputError class="mt-2" :message=" form.errors.name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <div class="input-icon mb-3">
                                                                    <span class="input-icon-addon">
                                                                        <at-icon size="20" />
                                                                    </span>
                                                                    <input
                                                                        id="email"
                                                                        type="email"
                                                                        class="form-control"
                                                                        v-model="form.email"
                                                                        required
                                                                        autofocus
                                                                        autocomplete="off"
                                                                        placeholder="Email"
                                                                    />
                                                                    <InputError class="mt-2" :message=" form.errors.email"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <div class="input-icon mb-3">
                                                                    <span class="input-icon-addon">
                                                                        <eye-icon size="20"/>
                                                                    </span>
                                                                    <input
                                                                        id="password"
                                                                        type="password"
                                                                        class="form-control"
                                                                        v-model="form.password"
                                                                        required
                                                                        placeholder="Password"
                                                                    />
                                                                    <InputError class="mt-2" :message="form.errors.password"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <label class="form-label">Informações de Processo:</label>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <select class="form-select" v-model="form.process_type" required>
                                                                    <option value="visa_student_pt">Visto de Estudante</option>
                                                                    <option value="visa_work_pt">Visto de Trabalho</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <select class="form-select">
                                                                    <option value="1">País onde reside
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <select class="form-select">
                                                                    <option value="1">Cidade onde reside
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <PrimaryButton class="btn btn-primary w-100">
                                                                Iniciar Avaliação Gratuita
                                                            </PrimaryButton>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Citzen Guide -->
                    <section>
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="row row-cards">
                                    <div class="col-12 mt-5">
                                        <div class="page-pretitle">
                                            Overview
                                        </div>
                                        <h2 class="page-title">
                                            Guia do Cidadão
                                        </h2>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col-3">
                                                    <img
                                                        src="https://www.frenchentree.com/wp-content/uploads/2021/10/shutterstock_1709201812-2.jpg"
                                                        class="w-100 h-100 object-cover card-img-start"
                                                        alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach"
                                                    />
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body"
                                                    >
                                                        <h3
                                                            class="card-title"
                                                        >
                                                            Documentos
                                                            Necessários
                                                        </h3>
                                                        <p
                                                            class="text-muted"
                                                        >
                                                            Lorem ipsum
                                                            dolor sit
                                                            amet,
                                                            consectetur
                                                            adipisicing
                                                            elit.
                                                            Aperiam
                                                            deleniti
                                                            fugit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col-3">
                                                    <img
                                                        src="https://immigrantinvest.com/wp-content/uploads/2022/08/countries-that-allow-dual-citizenship-image1.jpeg"
                                                        class="w-100 h-100 object-cover card-img-start"
                                                        alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach"
                                                    />
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body"
                                                    >
                                                        <h3
                                                            class="card-title"
                                                        >
                                                            Notícias dos
                                                            Processos
                                                        </h3>
                                                        <p
                                                            class="text-muted"
                                                        >
                                                            Lorem ipsum
                                                            dolor sit
                                                            amet,
                                                            consectetur
                                                            adipisicing
                                                            elit.
                                                            Aperiam
                                                            deleniti
                                                            fugit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col-3">
                                                    <img
                                                        src="https://www.nyhabitat.com/blog/wp-content/uploads/2013/02/Travel-visa-passport-europe-usa.jpg"
                                                        class="w-100 h-100 object-cover card-img-start"
                                                        alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach"
                                                    />
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body"
                                                    >
                                                        <h3
                                                            class="card-title"
                                                        >
                                                            Perguntas
                                                            Frequentes
                                                        </h3>
                                                        <p
                                                            class="text-muted"
                                                        >
                                                            Lorem ipsum
                                                            dolor sit
                                                            amet,
                                                            consectetur
                                                            adipisicing
                                                            elit.
                                                            Aperiam
                                                            deleniti
                                                            fugit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col-3">
                                                    <img
                                                        src="https://www.expatica.com/app/uploads/sites/2/2021/09/spain-work-visa.jpg"
                                                        class="w-100 h-100 object-cover card-img-start"
                                                        alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach"
                                                    />
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body"
                                                    >
                                                        <h3
                                                            class="card-title"
                                                        >
                                                            Vistos de
                                                            Trabalho
                                                        </h3>
                                                        <p
                                                            class="text-muted"
                                                        >
                                                            Lorem ipsum
                                                            dolor sit
                                                            amet,
                                                            consectetur
                                                            adipisicing
                                                            elit.
                                                            Aperiam
                                                            deleniti
                                                            fugit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col-3">
                                                    <img
                                                        src="https://uploads-ssl.webflow.com/62fc39d4a8950f2d6f3b35f6/6310b2996a18aa74e6dab98a_Beginning-of-German-University.jpeg"
                                                        class="w-100 h-100 object-cover card-img-start"
                                                        alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach"
                                                    />
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body"
                                                    >
                                                        <h3
                                                            class="card-title"
                                                        >
                                                            Vistos de
                                                            Estudante
                                                        </h3>
                                                        <p
                                                            class="text-muted"
                                                        >
                                                            Lorem ipsum
                                                            dolor sit
                                                            amet,
                                                            consectetur
                                                            adipisicing
                                                            elit.
                                                            Aperiam
                                                            deleniti
                                                            fugit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col-3">
                                                    <img
                                                        src="https://www.portugalist.com/wp-content/uploads/dp-italian-passports.jpg"
                                                        class="w-100 h-100 object-cover card-img-start"
                                                        alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach"
                                                    />
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="card-body"
                                                    >
                                                        <h3
                                                            class="card-title"
                                                        >
                                                            Guia do
                                                            Emigrante
                                                        </h3>
                                                        <p
                                                            class="text-muted"
                                                        >
                                                            Lorem ipsum
                                                            dolor sit
                                                            amet,
                                                            consectetur
                                                            adipisicing
                                                            elit.
                                                            Aperiam
                                                            deleniti
                                                            fugit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="pt-5 mt-5">
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="page-pretitle">
                                    Cidadania e Vistos
                                </div>
                                <h3 class="page-title-md pe-5">
                                    Comece hoje a tratar
                                </h3>
                                <div class="markdown text-justify pb-3">
                                    Nossa equipe é formada por profissionais dedicados e altamente experientes que colocam a sua satisfação em primeiro lugar. Acreditamos que o sucesso de nossos clientes é o nosso sucesso, e é por isso que estamos constantemente buscando maneiras de melhorar e evoluir.
                                    Estamos prontos para colaborar com você em seus projetos e desafios, oferecendo serviços de alta qualidade, suporte personalizado e soluções inovadoras.
                                </div>
                                <div class="markdown text-justify">
                                    Explore mais sobre nossa empresa e nossa abordagem única para atender às suas necessidades. Descubra como podemos trabalhar juntos para alcançar seus objetivos e transformar suas ideias em realidade. Estamos ansiosos para fazer parte da sua jornada e ajudá-lo a alcançar o sucesso que você merece.
                                </div>
                                <a
                                href="#"
                                class="btn btn-primary mt-5"
                                target="_blank"
                                rel="noopener"
                                >Quem Somos</a
                            >
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <img
                                src="@/Assets/Images/lawyers.png"
                                alt=""
                            />
                            </div>
                        </div>
                    </section>
                    <!-- Articles -->
                    <section>
                        <div class="row row-deck row-cards">
                            <div class="col-12 mt-5">
                                <div class="row row-cards">
                                    <div class="col-12 mb-3">
                                        <div class="page-pretitle">
                                            Artigos
                                        </div>
                                        <h2 class="page-title">
                                            Últimas Nóticias
                                        </h2>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mt-0">
                                        <div class="card">
                                            <!-- Photo -->
                                            <div
                                                class="img-responsive img-responsive-21x9 card-img-top"
                                                style="
                                                    background-image: url(https://www.globalcitizensolutions.com/wp-content/uploads/2020/07/Dupla-Nacionalidade.png);
                                                "
                                            ></div>
                                            <div class="card-body">
                                                <h3 class="card-title">
                                                    Impacto econômico da
                                                    dupla cidadania
                                                </h3>
                                                <p class="text-muted">
                                                    Lorem ipsum dolor
                                                    sit amet,
                                                    consectetur
                                                    adipisicing elit.
                                                    Aperiam deleniti
                                                    fugit incidunt,
                                                    iste, itaque minima
                                                    neque pariatur
                                                    perferendis sed
                                                    suscipit velit vitae
                                                    voluptatem.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mt-0">
                                        <div class="card">
                                            <!-- Photo -->
                                            <div
                                                class="img-responsive img-responsive-21x9 card-img-top"
                                                style="
                                                    background-image: url(https://st2.depositphotos.com/1229718/46758/i/600/depositphotos_467581472-stock-photo-cultural-appropriation-social-issue-and.jpg);
                                                "
                                            ></div>
                                            <div class="card-body">
                                                <h3 class="card-title">
                                                    Dupla cidadania e
                                                    identidade cultural
                                                </h3>
                                                <p class="text-muted">
                                                    Lorem ipsum dolor
                                                    sit amet,
                                                    consectetur
                                                    adipisicing elit.
                                                    Aperiam deleniti
                                                    fugit incidunt,
                                                    iste, itaque minima
                                                    neque pariatur
                                                    perferendis sed
                                                    suscipit velit vitae
                                                    voluptatem.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mt-0">
                                        <div class="card">
                                            <!-- Photo -->
                                            <div
                                                class="img-responsive img-responsive-21x9 card-img-top"
                                                style="
                                                    background-image: url(https://www.metricser.com/wp-content/uploads/2021/08/111462807_whatsubject.jpg);
                                                "
                                            ></div>
                                            <div class="card-body">
                                                <h3 class="card-title">
                                                    Implicações legais e
                                                    políticas da dupla
                                                    cidadania
                                                </h3>
                                                <p class="text-muted">
                                                    Lorem ipsum dolor
                                                    sit amet,
                                                    consectetur
                                                    adipisicing elit.
                                                    Aperiam deleniti
                                                    fugit incidunt,
                                                    iste, itaque minima
                                                    neque pariatur
                                                    perferendis sed
                                                    suscipit velit vitae
                                                    voluptatem.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mt-0">
                                        <div class="card">
                                            <!-- Photo -->
                                            <div
                                                class="img-responsive img-responsive-21x9 card-img-top"
                                                style="
                                                    background-image: url(https://www.entreestudiantes.com/wp-content/uploads/2022/02/bachillerato-internacional-educacion-bilingue.jpg);
                                                "
                                            ></div>
                                            <div class="card-body">
                                                <h3 class="card-title">
                                                    O futuro da dupla
                                                    cidadania nos países
                                                </h3>
                                                <p class="text-muted">
                                                    Lorem ipsum dolor
                                                    sit amet,
                                                    consectetur
                                                    adipisicing elit.
                                                    Aperiam deleniti
                                                    fugit incidunt,
                                                    iste, itaque minima
                                                    neque pariatur
                                                    perferendis sed
                                                    suscipit velit vitae
                                                    voluptatem.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <Modal id="modalDifferentProcess">
                <form @submit.prevent="submitDifferentProcess">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status bg-success"></div>
                    <div class="modal-body text-center py-4">
                        <checklist-icon size="24" class="icon mb-2 text-green icon-lg"/>
                        <h3>Já possui um processo ativo</h3>
                        <div class="text-secondary">
                            Identificamos que você já possui um processo ativo em nosso sistema. Isso é ótimo! 
                            Se você deseja criar um novo processo bastar confirmar.
                        </div>
                      </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancelar
                                  </a></div>
                                <div class="col">
                                <button class="btn btn-success w-100" data-bs-dismiss="modal">
                                   Iniciar outro processo
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </Modal>
            <button class="d-none" data-bs-toggle="modal" data-bs-target="#modalDifferentProcess" ref="modalButton"></button>
        </template>
    </AppLayout>
</template>
<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import VueTypewriterEffect from "vue-typewriter-effect";
import CardIcon from "@/Components/CardIcon.vue";
import Modal from "@/Components/Modal.vue";
import { ref } from 'vue';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';


const form = useForm({
    name: "",
    surname: "",
    location: "",
    email: "",
    password: "",
    process_type: null,
    user_another_process: false,
});
const modalButton = ref(null);


const submitDifferentProcess = ()=>{
    form.user_another_process = true;
    submit();
}

const submit = () => {
    form.post(route("process"), {
        onSuccess: (response) =>{
            console.log(response)
            toast.success('Processo Criado', {autoClose: 3000,}); 
        },onError:(response)=>{
            if(response.error != 'Email is already registered'){
                toast.error(response.error, {autoClose: 3000,});
            }
             
            if (modalButton.value) {
                modalButton.value.click();
            }
        },
    });
};
</script>
