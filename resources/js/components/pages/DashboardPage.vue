<template>
  <app-layout>
    <cars-table />
  </app-layout>
</template>

<script>
import CarsTable from "../CarsTable.vue";
import AppLayout from "../AppLayout.vue";
export default {
  components: {
    CarsTable,
    AppLayout,
  },
};
</script>
