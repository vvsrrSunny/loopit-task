<template>
  <table-layout>
    <template #heading>
      <table-header-cell> Car Name </table-header-cell>
      <table-header-cell> Auto make </table-header-cell>
      <table-header-cell> Number of cars available </table-header-cell>
      <table-header-cell> cars in stock </table-header-cell>
    </template>
    <template #body>
      <tr>
        <table-cell> X 1 </table-cell>
        <table-cell> BMW </table-cell>
        <table-cell> BMW </table-cell>
        <table-cell> BMW </table-cell>
      </tr>
      <tr>
        <table-cell> X 1 </table-cell>
        <table-cell> BMW </table-cell>
        <table-cell> BMW </table-cell>
        <table-cell> BMW </table-cell>
      </tr>
    </template>
  </table-layout>
</template>

<script>
import TableLayout from "./TableLayout.vue";
import TableHeaderCell from "./TableHeaderCell.vue";
import TableCell from "./TableCell.vue";

export default {
  components: {
    TableLayout,
    TableHeaderCell,
    TableCell,
  },

  mounted() {
    this.displayCars();
  },

  data() {
    return {
      cars: [],
    };
  },

  methods: {
    displayCars() {
      axios.get("/dashboard").then((response) => {
        this.cars = response.data;
      });
    },
  },
};
</script>
