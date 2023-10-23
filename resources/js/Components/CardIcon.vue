<template>
    <a href="#" class="decoration-none">
        <div class="card card-sm margin-effect-2">
            <div class="card-body px-2 py-2">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-azure text-white avatar">
                            <component :is="icon" size="25"/>
                        </span>
                    </div>
                    <div class="col">
                        <div class="font-weight-medium">
                            {{ title }}
                        </div>
                        <div class="text-secondary line-height-0">
                            {{ subtitle }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</template>

<script setup>

import { defineProps, computed } from 'vue';

const props = defineProps({
  title: {
    type: String,
    default: false,
  },
  subtitle: {
    type: String,
    default: false,
  },
  icon: {
    type: String,
    default: false,
  },
});

const icon = computed(() => `${props.icon}-icon`);

</script>