<table>
    <thead>
    <tr>
        <th><img src="{{ public_path().'/logounellez.jpg' }}" /></th>
        <th  colspan="8" style="text-align: center; vertical-align: center; font-size:14px;">
            <strong>
                UNIDAD DE EVALUACION INSTITUCIONAL 
            </strong>
        </th>

@foreach ($dataUser as $item)
    <th colspan="8" style="vertical-align: center;"><span style="font-weight: bold">Usuario:</span> {{$item->name}}-{{$item->Nombre_Direccion}}</th>
@endforeach
    </tr>
    </thead>




    <tbody>
    {{-- comment --}}
    <tr>
        
    </tr>
    
    {{-- comment --}}
    

    {{-- comment --}}
    <tr>
        <th></th>
        <th colspan="8" style="text-align: center; text-decoration: underline; font-size:14px;"><strong>Factor Interno</strong></th>
    </tr>
    <tr>
        <th></th>    
    
        <th colspan="8"><strong>Fortalezas</strong></th>
   
        </tr>

    @foreach ($data as $key=> $item)
        <tr>
            <td style="text-align: center;  vertical-align: center;"><strong>F{{$key+1}}</strong></td>
            <td colspan="8" style="height: 30px;  vertical-align: center;">{{$item->description}} </td>
        </tr>
    @endforeach
    
    <tr>
    <th></th>    
    <th colspan="8"><strong>Debilidades</strong></th>
    </tr>

    @foreach ($dataDebilidades as $key=> $Debilidades)
    <tr>
        <td style="text-align: center;  vertical-align: center;"><strong>D{{$key+1}}</strong></td>
        <td colspan="8" style="height: 30px;  vertical-align: center;">{{$Debilidades->description}} </td>
    </tr>
@endforeach




    {{-- comment --}}

    <tr>
        <th></th>
        <th colspan="8" style="text-align: center; text-decoration: underline; font-size:14px;"><strong>Factor Externo</strong></th>
    </tr>
    <tr>
        <th></th>    
        <th colspan="8" ><strong>Amenazas</strong></th>
    </tr>

    @foreach ($dataAmenaza as $key=> $Amenaza)
        <tr>
            <td style="text-align: center;  vertical-align: center;"><strong>A{{$key+1}}</strong></td>
            <td colspan="8" style="height: 30px;  vertical-align: center;">{{$Amenaza->description}} </td>
        </tr>
    @endforeach

    <tr>
        <th></th>    
        <th colspan="8"><strong>Oportunidades</strong></th>
    </tr>
    
    @foreach ($dataOportunidades as $key=> $Oportunidades)
    <tr>
        <td style="text-align: center;  vertical-align: center;"><strong>O{{$key+1}}</strong></td>
        <td colspan="8" style="height: 30px;  vertical-align: center;">{{$Oportunidades->description}} </td>
    </tr>
@endforeach


    </tbody>
</table>