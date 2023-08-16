<div class="block w-full overflow-x-auto">
  <table class="items-center bg-transparent w-full border-collapse">
      <thead>
          <tr>
              <th
                  class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                  ID
              </th>
              <th
                  class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                  Date
              </th>
              <th
                  class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                  Type
              </th>
              <th
                  class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                  Submitter
              </th>
              <th
                  class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                  Status
              </th>
              <th
                  class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
              </th>
          </tr>
      </thead>

      <x-table-body :records="$records"></x-table-body>
  </table>
</div>