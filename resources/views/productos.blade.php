@extends('layouts.dashboard1')

@section('contenido')

<h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum at repellat enim quisquam numquam pariatur blanditiis facilis in vitae fuga quidem dolores, ratione harum corrupti porro explicabo voluptate est. Enim!

</h1>


<form class="row g-3 align-items-center  justify-content-center">
    <div class="pruebassss">
        <div class="">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="test " id="inputEmail4">
        </div>
        <div class="">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control border-info" id="inputPassword4">
        </div>
        <div class="">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control border-info" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control border-info" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control border-info" id="inputCity">
        </div>
        <div class="">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control border-info" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <div class="">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control border-info" id="inputZip">
        </div>
        <div class="">
            <input class="" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
        </div>


        <div class="col-md-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>



</form>


@endsection