<template>
  <TopMenu />
  <div class="page">
    <div class="page-wrapper">
      <slot name="content"></slot>
    </div>
  </div>
  <Footer />
</template>
<script setup>
  import TopMenu from "./TopMenu.vue";
  import Footer from "./Footer.vue";
</script>
