<table>
    <th>
        <td> Id </td>
        <td> Name </td>
        <td> ContactName </td>
        <td> Address </td>
        <td> City </td>
        <td> PostalCode </td>
        <td> Country </td>
    </th>
    @foreach($data as $item)
    <tr>
        <td> {{$item->cid}} </td>
        <td> {{$item->cus_name}} </td>
        <td> {{$item->contactname}} </td>
        <td> {{$item->address}} </td>
        <td> {{$item->city}} </td>
        <td> {{$item->postalcode}} </td>
        <td> {{$item->country}} </td>
    </tr>
    @endforeach
</table>

<span>
    {{$data -> links()}}
</span>
<style>
    .w-5 {
        display: none;
    }
</style>