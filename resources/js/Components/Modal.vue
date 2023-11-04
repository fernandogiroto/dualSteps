<template>
    <div class="modal modal-blur fade" :id="id" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content">
            <slot>

            </slot>

          </div>
        </div>
      </div>
</template>
<script setup>
const props = defineProps({
  id: {
    type: String,
    default: '',
  },

});

</script>