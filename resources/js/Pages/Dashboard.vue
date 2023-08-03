<template>
  <Head title="Dashboard"/>
  <AppLayout>
    <template #content>
        <div class="page">
          <div class="page-wrapper">
            <!-- Banner Intro -->
            <div class="page-header overlay-dark mt-0 d-print-none">
              <div class="container-xl">
                <div class="row g-2 align-items-center overlay-content">
                  <div class="col-5">
                    <div class="page-pretitle text-white">
                      Dupla Cidadania 
                    </div>
                    <h2 class="page-title-lg text-white">
                      Comece hoje a tratar da sua <span class="highlight">dupla cidadania</span>
                    </h2>
                    <div class="markdown text-white">
                      Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular.
                      All icons come from the Tabler Icons set.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Content -->
            <div class="page-body page-intro">
              <div class="container-xl">
                <!-- Form App -->
                <section>
                  <div class="row row-deck row-cards">
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-md  bg-primary-lt">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-12">
                              <h3 class="h1">Como Funciona</h3>
                              <div class="markdown text-muted">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. it to make a type specimen book. It has survived not only five centuries.
                              </div>
                              <div class="mt-3">
                                <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank" rel="noopener">Quero Saber Mais</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-8">
                      <div class="card">
                        <form @submit.prevent="submit">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-6">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <label class="form-label">Informações Pessoais</label>
                                      <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                          <user-icon size="20"/>
                                        </span>
                                        <input id="name" type="text" class="form-control" v-model="form.name" required autofocus autocomplete="off" placeholder="Nome"/>
                                        <InputError class="mt-2" :message="form.errors.name" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                          <user-up-icon size="20"/>
                                        </span>
                                        <input id="surname" type="text" class="form-control" v-model="form.surname" required autofocus autocomplete="off" placeholder="Sobrenome"/>
                                        <InputError class="mt-2" :message="form.errors.surname" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                          <at-icon size="20"/>
                                        </span>
                                        <input id="email" type="email" class="form-control" v-model="form.email" required autofocus autocomplete="off" placeholder="Email"/>
                                        <InputError class="mt-2" :message="form.errors.email" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                          <location-icon size="20"/>
                                        </span>
                                        <input id="location" type="text" class="form-control" v-model="form.location" required autofocus autocomplete="off" placeholder="Localização onde reside"/>
                                        <InputError class="mt-2" :message="form.errors.location" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                          <eye-icon size="20"/>
                                        </span>
                                        <input id="password" type="password" class="form-control" v-model="form.password" required placeholder="Password"/>
                                        <InputError class="mt-2" :message="form.errors.password" />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <label class="form-label">Informações de Processo</label>
                                      <div class="ts-wrapper form-select single full has-items input-hidden"><div class="ts-control"><div data-value="pl" class="item" data-ts-item=""><span class="dropdown-item-indicator"><span class="flag flag-xs flag-country-pt"></span></span>Cidadania Portuguesa</div><input tabindex="0" role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-countries-ts-dropdown" id="select-countries-ts-control" type="select-one" aria-activedescendant="select-countries-opt-1"></div></div>
                                      <!-- <div class="mb-3">
                                        <select class="form-select">
                                          <option value="1">Cidadania Portuguesa</option>
                                          <option value="2">Cidadania Italiana</option>
                                          <option value="3">Cidadania Espanhola</option>
                                        </select>
                                      </div> -->
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <select class="form-select">
                                        <option value="1">Pai/Mãe para filho(a)</option>
                                        <option value="2">Avô/Avó para neto(a)</option>
                                        <option value="3">Por Casamento</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                          <user-icon size="20"/>
                                        </span>
                                        <input type="text" value="" class="form-control" placeholder="Nome Completo do Parente">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                          <location-icon size="20"/>
                                        </span>
                                        <input type="text" value="" class="form-control" placeholder="Localização do Parente">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <PrimaryButton class="btn btn-primary w-100">
                                        Iniciar Meu Processo
                                      </PrimaryButton>
                                    </div>
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
                          <h2 class="page-title">Guia do Cidadão</h2>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                          <div class="card">
                            <div class="row row-0">
                              <div class="col-3">
                                <img src="https://www.internations.org/seo-assets/static/4a2fe9ddb2d7451da0021e7cafe816c8/6e20c/visa.jpg" class="w-100 h-100 object-cover card-img-start" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                              </div>
                              <div class="col">
                                <div class="card-body">
                                  <h3 class="card-title">Documentos Necessários</h3>
                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                          <div class="card">
                            <div class="row row-0">
                              <div class="col-3">
                                <img src="https://immigrantinvest.com/wp-content/uploads/2022/08/countries-that-allow-dual-citizenship-image1.jpeg" class="w-100 h-100 object-cover card-img-start" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                              </div>
                              <div class="col">
                                <div class="card-body">
                                  <h3 class="card-title">Notícias dos Processos</h3>
                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                          <div class="card">
                            <div class="row row-0">
                              <div class="col-3">
                                <img src="https://www.nyhabitat.com/blog/wp-content/uploads/2013/02/Travel-visa-passport-europe-usa.jpg" class="w-100 h-100 object-cover card-img-start" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                              </div>
                              <div class="col">
                                <div class="card-body">
                                  <h3 class="card-title">Perguntas Frequentes</h3>
                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                          <div class="card">
                            <div class="row row-0">
                              <div class="col-3">
                                <img src="https://www.expatica.com/app/uploads/sites/2/2021/09/spain-work-visa.jpg" class="w-100 h-100 object-cover card-img-start" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                              </div>
                              <div class="col">
                                <div class="card-body">
                                  <h3 class="card-title">Vistos de Trabalho</h3>
                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                          <div class="card">
                            <div class="row row-0">
                              <div class="col-3">
                                <img src="https://uploads-ssl.webflow.com/62fc39d4a8950f2d6f3b35f6/6310b2996a18aa74e6dab98a_Beginning-of-German-University.jpeg" class="w-100 h-100 object-cover card-img-start" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                              </div>
                              <div class="col">
                                <div class="card-body">
                                  <h3 class="card-title">Vistos de Estudante</h3>
                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                          <div class="card">
                            <div class="row row-0">
                              <div class="col-3">
                                <img src="https://www.portugalist.com/wp-content/uploads/dp-italian-passports.jpg" class="w-100 h-100 object-cover card-img-start" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                              </div>
                              <div class="col">
                                <div class="card-body">
                                  <h3 class="card-title">Guia do Emigrante</h3>
                                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>    
                  </div>
                </section>     
                <!-- Call Action -->
                <section>
                  <div class="row row-deck row-cards">
                    <div class="col-12">
                      <div class="row row-cards">
                        <div class="col-12 mt-5">
                          <div class="card card-md call-action overlay-dark-banner">
                            <div class="card-body overlay-content">
                              <div class="row align-items-center">
                                <div class="col-7">
                                  <h3 class="h1 text-white">Quer saber se tem direito a <span class="highlight">dupla cidadania</span>?</h3>
                                  <div class="markdown text-white">
                                    All icons come from the Tabler Icons set and are MIT-licensed. Visit tabler-icons.io,
                                    download any of the 4158 icons in SVG, PNG or&nbsp;React and use them in your favourite design tools.
                                  </div>
                                  <div class="mt-3">
                                    <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank" rel="noopener">Simular Processo</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
                            <h2 class="page-title">Últimas Nóticias</h2>
                          </div>
                          <div class="col-md-6 col-lg-3 mt-0">
                            <div class="card">
                              <!-- Photo -->
                              <div class="img-responsive img-responsive-21x9 card-img-top" style="background-image: url(https://www.globalcitizensolutions.com/wp-content/uploads/2020/07/Dupla-Nacionalidade.png)"></div>
                              <div class="card-body">
                                <h3 class="card-title">Impacto econômico da dupla cidadania</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima
                                  neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3 mt-0">
                            <div class="card">
                              <!-- Photo -->
                              <div class="img-responsive img-responsive-21x9 card-img-top" style="background-image: url(https://st2.depositphotos.com/1229718/46758/i/600/depositphotos_467581472-stock-photo-cultural-appropriation-social-issue-and.jpg)"></div>
                              <div class="card-body">
                                <h3 class="card-title">Dupla cidadania e identidade cultural</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima
                                  neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3 mt-0">
                            <div class="card">
                              <!-- Photo -->
                              <div class="img-responsive img-responsive-21x9 card-img-top" style="background-image: url(https://www.metricser.com/wp-content/uploads/2021/08/111462807_whatsubject.jpg)"></div>
                              <div class="card-body">
                                <h3 class="card-title">Implicações legais e políticas da dupla cidadania</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima
                                  neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3 mt-0">
                            <div class="card">
                              <!-- Photo -->
                              <div class="img-responsive img-responsive-21x9 card-img-top" style="background-image: url(https://www.entreestudiantes.com/wp-content/uploads/2022/02/bachillerato-internacional-educacion-bilingue.jpg)"></div>
                              <div class="card-body">
                                <h3 class="card-title">O futuro da dupla cidadania nos países</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima
                                  neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
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
        </div>
    </template>
  </AppLayout>
</template>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';

const form = useForm({
  name: '',
  surname: '',
  location: '',
  email: '',
  password: '',
  terms: false,
});
const submit = () => {
  form.post(route('process'), {
    onFinish: () => form.reset('password', 'password_confirmation'),
  });
};

</script>