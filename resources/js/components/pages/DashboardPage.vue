<template>
  <div>
    <div class="bg-indigo-600 pb-32">
      <nav class="bg-indigo-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="border-b border-indigo-300">
            <div class="flex items-center justify-between h-16 px-4 sm:px-0">
              <a href="/">
                <application-logo
                />
              </a>
              <div class="flex items-center">
                <div class="hidden md:block">
                  <div class="flex items-baseline space-x-4">
                    <form method="POST" action="/api/logout">
                      <input
                        class="
                          bg-indigo-700
                          text-white
                          px-3
                          py-2
                          rounded-md
                          text-sm
                          font-medium
                          cursor-pointer
                          hover:opacity-75
                        "
                        type="submit"
                        value="logout"
                      />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <header class="py-10">
        <div
          class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between"
        >
          <h1 class="text-3xl font-bold text-white">All cars available</h1>
        </div>
      </header>
    </div>

    <main class="-mt-32">
      <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
        <cars-table />
      </div>
    </main>
  </div>
</template>

<script>
import CarsTable from "../CarsTable.vue";
import ApplicationLogo from "../ApplicationLogo.vue";
export default {
  components: {
    CarsTable,
    ApplicationLogo,
  },
};
</script>
