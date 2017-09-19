<table class="table table-hover  table-bordered">
    <thead>
    <tr>
        <td>libelle</td>
        <td>nom</td>
        <td>nationalité</td>
    </tr>
    </thead>
    <tbody>
    @foreach($pays as $unpays)
        <tr>

            <td>{{$unpays->libelle}}</td>
            <td>{{$unpays->nom}}</td>
            <td>{{$unpays->nationalite}}</td>

        </tr>
    @endforeach
    </tbody>
</table>