<template>
  <TopMenu />
  <slot name="content"></slot>
  <Footer />
</template>
<script setup>
  import TopMenu from "./TopMenu.vue";
  import Footer from "./Footer.vue";
</script>
