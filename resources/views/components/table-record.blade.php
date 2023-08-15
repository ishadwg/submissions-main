<tr>
  <th
      class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
      {{ $record->id }}
  </th>
  <td
      class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
      {{ $record->created_at }}
  </td>
  <td
      class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
      {{ $record->type }}
  </td>
  <td
      class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
      {{ $record->user_id }}
  </td>
  <td
      class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
      <p class="text-gray-600">{{ $record->status_id }}</p>
  </td>
</tr>