<template>

    <Head title="Log in"/>
    <div class=" d-flex flex-column">
      <div class="page page-center">
        <div class="container container-tight py-4">
          <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark">DUAL STEPS</a> 
          </div>
          <div class="card card-md">
            <div class="card-body">
              <h2 class="h2 text-center mb-4">Acessar Processo</h2>
              <form @submit.prevent="submit">
                <div class="mb-3">
                  <div class="mt-4">
                    <InputLabel for="email" value="Email"/>
                    <TextInput id="email" type="email" class="form-control" v-model="form.email" required autofocus autocomplete="username" />
                    <InputError class="mt-2" :message="form.errors.email" />
                  </div>
        
                  <div class="mt-4">
                    <InputLabel for="password" value="Password"/>
                    <TextInput id="password" type="password" class="form-control" v-model="form.password" required autocomplete="current-password"/>
                    <InputError class="mt-2" :message="form.errors.password" />
                  </div>
                </div>

                <div class="mb-2">
                  <label class="form-check">
                    <Checkbox name="remember" class="form-check-input" v-model:checked="form.remember"/>
                    <span class="form-check-label">Remember me on this device</span>
                  </label>
                </div>

                <div class="form-footer">
                  <PrimaryButton class="btn btn-primary w-100" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Acessar Meu Processo
                  </PrimaryButton>
                </div>

                
      
                <div class="flex items-center justify-end mt-4">
                  <Link v-if="canResetPassword" :href="route('password.request')" class="text-sm text-gray-600 underline  hover:text-gray-900">
                    Esqueceu a senha?
                  </Link>
      

                </div>
              </form>
              
            </div>
            
          </div>
          <div class="text-center text-muted mt-3">
            Não tem processo ativo? <Link :href="route('register')">Criar Processo</Link>
          </div>
        </div>
      </div>
    </div>



</template>

<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
defineProps({
    canResetPassword: Boolean,
    status: String,
});
const form = useForm({
    email: '',
    password: '',
    remember: false
});
const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
