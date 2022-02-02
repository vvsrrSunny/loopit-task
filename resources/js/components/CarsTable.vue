<template>
  <table-layout>
    <template #heading>
      <table-header-cell> Car Name </table-header-cell>
      <table-header-cell> Auto make </table-header-cell>
    </template>
    <template #body>
      <table-cell> X 1 </table-cell>
      <table-cell> BMW </table-cell>
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
};
</script>
