<template>
  <table-layout>
    <template #heading>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Car Name
      </th>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Auto make
      </th>
    </template>
    <template #body>
      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
        X 1
      </td>
      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
        BMW
      </td>
    </template>
  </table-layout>
</template>

<script>
import TableLayout from "./TableLayout.vue";

export default {
  components: {
    TableLayout,
  },
};
</script>
