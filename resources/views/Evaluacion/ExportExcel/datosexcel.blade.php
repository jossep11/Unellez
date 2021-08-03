<table>
    <thead>
    <tr>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($Operacion as $item)
        <tr>
            <td>{{$item->id}} </td>
            <td> </td>
        </tr>
    @endforeach
    </tbody>
</table>