  <!-- Card Section -->
  <section class="py-6">
      <div class="container mx-auto xl:w-8/12 px-4 xl:px-0">
          <div class="flex flex-col xl:flex-row gap-4">

              <x-card-value :cardvalue="$cardvalue"></x-card-value>

              <x-card-table :recenthistories="$recenthistories"></x-card-table>

          </div>
      </div>
  </section>
