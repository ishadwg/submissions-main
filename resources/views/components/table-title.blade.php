<div class="rounded-t mb-0 py-3 border-0">
    <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
            <h2 id="submission-list" class="font-semibold text-base text-gray-500">Submission List</h2>
        </div>
        <div class="flex justify-between">
          <div x-data>
            <select class="bg-gray-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="status" x-on:change="onChange">
              <option value="">All Status</option>
              <option value="1" @if (request()->input('status') == 1) selected @endif>Pending</option>
              <option value="2" @if (request()->input('status') == 2) selected @endif>Approved</option>
              <option value="3" @if (request()->input('status') == 3) selected @endif>Rejected</option>
            </select>
          </div>
          <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
              <button
                  class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                  type="button" onclick="window.location.assign('/submissions/create')">Create</button>
          </div>
        </div>
    </div>
</div>

<script>
function onChange() {
    url = new URL(window.location.href);
    searchParams = new URLSearchParams(url.search);
    event.target.value !== ''
        ? searchParams.set('status', event.target.value)
        : searchParams.delete('status');
    url.search = searchParams.toString();
    target = url.hash === '' ? url.href + '#submission-list' : url.href;
    window.location.assign(target);
}
</script>