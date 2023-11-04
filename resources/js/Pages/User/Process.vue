<template>
    <Head title="Meu Processo"/>
    <AppLayout>
        <template #content>
        <!-- Page header -->
          <!-- Page body -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row row-cards">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <label class="form-label required">Processo:</label>
                      <select class="form-select">
                        <option v-for="process in processes" :key="process.id">{{ process.type_of_process.name }}</option>
                      </select>
                        <!-- <option>{{props.process.type_of_process.name}}</option> -->
                      <div class="text-muted text-justify mt-3 mb-3">
                        <a class="btn btn-primary my-3" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd">
                          <clipboard-text-icon size="18" class="me-2"/> Documentos Enviados
                        </a>
                      </div>

                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                        <div class="offcanvas-header">
                          <h2 class="offcanvas-title" id="offcanvasEndLabel">Lista de Documentos Enviados</h2>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque 
                            laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                          </div>
                        </div>
                      </div>

                      <div class="offcanvas offcanvas-end" tabindex="-1" id="lawyer_responsable" aria-labelledby="offcanvasEndLabel">
                        <div class="offcanvas-header">
                          <h2 class="offcanvas-title" id="offcanvasEndLabel">Advogado Responsável</h2>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <span class="avatar avatar-xl mb-3" style="background-image: url(https://i.pravatar.cc/600)"></span>
                          
                          <ul class="list-unstyled space-y-1">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                              <!-- {{ props.process.lawyer.name }} -->
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                              <!-- {{ props.process.lawyer.email }} -->
                            </li>
                          </ul>
                          
                          <div class="text-justify">
                            Como advogado especializado em processos de dupla cidadania, minha missão é ajudar indivíduos a alcançarem seu objetivo de obter a cidadania de outro país.
                            Trabalho lado a lado com meus clientes, oferecendo suporte jurídico abrangente e orientação especializada em todas as etapas do processo.
                          </div>

                          <ul class="list-unstyled space-y-1 mt-3">
                            <li>
                              <checklist-icon size="20"/>
                              Processos Realizados: 10
                            </li>
                            <li>
                              <flag iso="pt" class="me-1" />  Portugal - Lisboa
                            </li>
                          </ul>

                        </div>
                      </div>


                      <h4>Informações Pessoais</h4>
                      <ul class="list-unstyled space-y-1">
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                          <!-- {{ props.process.user.name }}  {{ props.process.user.surname }} -->
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                          <!-- {{ props.process.user.email }} -->
                        </li>
                      </ul>
                      <h4>Informações do Processo</h4>
                      <ul class="list-unstyled space-y-1">
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                          {{ props.process}} 
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                          Paulo Roberto Lemos Giroto
                        </li>
                      </ul>
                      <h4>Advogado Responsável</h4>
                      <ul class="list-unstyled space-y-1">
                        <li class="d-flex align-items-center cursor-pointer" data-bs-toggle="offcanvas" href="#lawyer_responsable" aria-controls="offcanvasEnd">
                          <span class="avatar avatar-sm me-2" style="background-image: url(https://i.pravatar.cc/600)"></span>
                          <!-- {{ props.process.lawyer.name }} -->
                        </li>
                      </ul>
                      <h4>Processo</h4>
                      <ul class="list-unstyled space-y-1">
                        <li>
                          <clock-hour-2-icon size="20"/> Criado em
                          <!-- {{ props.process.created_at.substring(0, 10)  }} -->
                        </li>
                        <li>
                          <clock-check-icon size="20"/> Atualizado em
                          <!-- {{ props.process.updated_at.substring(0, 10)  }} -->
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer">
                      Precisa de ajuda?
                      <a href="#" target="_blank">info@dualsteps.com</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card card-lg mb-2">
                    <div class="card-body py-2">
                      <ul class="steps steps-blue steps-counter my-4">
                        <li class="step-item active">Início do Processo</li>
                        <li class="step-item ">Documentos</li>
                        <li class="step-item">Entrada</li>
                        <li class="step-item">Análise</li>
                        <li class="step-item">Dupla Cidadania</li>
                      </ul>
                    </div>
                  </div>
                  <div class="card card-lg">
                    <div class="card-body">
                      <div class="markdown">
                        <!-- <p>Olá <strong>{{ props.process.user.name }} {{ props.process.user.surname }}</strong>, vamos começar o seu processo:</p> -->
                        <p>Os primeiros passos será enviar ao advogado responsável pelo seu caso (<strong></strong>) os documentos listados abaixo. 
                        Os documentos serão analisados ficando com o status amarelo e assim que for confirmado a análise passa a cor verde. Após termos todos documentos analisados, 
                        a nova etapa do processo será iniciada.
                        </p>
                        <ol>
                          <li>For any resalable web applications or software programs, you cannot include our graphic.</li>
                          <li>You cannot redistribute any of the software, or products created with Tabler paid  products.</li>
                          <li>You cannot add our source code to any open source repository.</li>
                        </ol>
                        <div class="btn-list my-4">
                          <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <form @submit.prevent="submit">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  <div class="modal-status bg-success"></div>
                                  <div class="modal-body text-center py-4">
                                    <checklist-icon size="24" class="icon mb-2 text-green icon-lg"/>
                                    <!-- <h3>Certidão de Nascimento{{ props.process.user.name }} {{ props.process.user.surname }}</h3> -->
                                    <div class="mb-3">
                                      <input type="file" @input="form.file = $event.target.files[0]" class="form-control" ref="avatarInput" />

                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <div class="w-100">
                                      <div class="row">
                                        <div class="col">
                                          <button class="btn btn-success w-100" data-bs-dismiss="modal">
                                            Enviar para Análise
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <button class="btn position-relative" data-bs-toggle="modal" data-bs-target="#modal-success" >Certidão de Nascimento <span class="badge bg-green badge-notification badge-pill"><checklist-icon size="15"/></span></button>
                          <button class="btn position-relative"> Certidão de Nascimento Paulo Giroto<span class="badge bg-yellow badge-notification badge-pill"><clipboard-icon size="15"/></span></button>
                          <button class="btn position-relative">Formulário A1 <span class="badge bg-yellow badge-notification badge-pill"><clipboard-icon size="15"/></span></button>
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="my-3 mb-0">
                      <textarea rows="2" class="form-control" placeholder="Escreva um comentário ou dúvida"></textarea>
                    </div>

                </div>

              </div>
            </div>
          </div>
        </template>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const page = usePage();
const user = computed(() => page.props.auth.user);

const props = defineProps({processes: null})


const form = useForm({
    file: null,
});
const submit = () => {
  const formData = new FormData();
  console.log(form.file.value);
  formData.append('file', form.file.value);
    form.post(route("process.save-document"), {
        onFinish: () => console.log('foi2'),
    });
};
</script>