<template>
  <table-layout>
    <template #heading>
      <table-header-cell> Car Name </table-header-cell>
      <table-header-cell> Auto make </table-header-cell>
      <table-header-cell> Number of cars available </table-header-cell>
      <table-header-cell> cars in stock </table-header-cell>
    </template>
    <template #body>
      <tr v-for="car in cars" :key="car.id">
        <table-cell> {{ car.car_name }}</table-cell>
        <table-cell> {{ car.automaker }}</table-cell>
        <table-cell> {{ car.number_of_available_cars }}</table-cell>
        <table-cell> {{ car.in_stock == 1 ? "yes" : "no" }}</table-cell>
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
