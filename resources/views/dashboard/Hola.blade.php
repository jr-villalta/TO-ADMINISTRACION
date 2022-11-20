@extends('dashboard.Recursos.index')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-5">
        <div class="col ">
            <div class="card text-center bg-primary text-white" style="width: 18rem;" >
                <img  src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-user-vector-avatar-png-image_1541962.jpg"
                    class="card-img-top p-3 bg-white" width="100" >
                <div class="card-body">
                    <h5 class="card-title center">Usuarios</h5>
                    <p class="card-text"> <?php echo $users; ?> </p>
                </div>
            </div>
        </div>
        <div class="col ">
            <div class="card text-center bg-secondary text-white" style="width: 18rem;" >
                <img src="https://cdn-icons-png.flaticon.com/512/4003/4003697.png"
                    class="card-img-top  p-3 bg-white" width="100px">
                <div class="card-body">
                    <h5 class="card-title center">Proveedores</h5>
                    <p class="card-text"> <?php echo "$proveedores"; ?> </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-danger text-white" style="width: 18rem;" >
                <img src="https://cdn-icons-png.flaticon.com/512/1554/1554591.png"
                    class="card-img-top  p-3 bg-white" width="100px">
                <div class="card-body ">
                    <h5 class="card-title center">Productos</h5>
                    <p class="card-text"> <?php echo $productos; ?> </p>
                </div>
            </div>
        </div>
        <div class="col ">
            <div class="card text-center bg-success text-white " style="width: 18rem;" >
                <img src="https://png.pngtree.com/element_origin_min_pic/16/09/07/1557cfc29509735.jpg"
                    class="card-img-top  p-3 bg-white" width="100px">
                <div class="card-body">
                    <h5 class="card-title center">Categorias</h5>
                    <p class="card-text"> <?php echo $categories; ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
   hola
@endsection
