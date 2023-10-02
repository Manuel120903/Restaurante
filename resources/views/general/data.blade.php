<div class="col-2"></div>
<div class="col-9">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Imagen</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($food as $food)
        
    
      <tr>
       <th scope="row">{{$food->id}}</th>
       <th>{{$food->name}}</th>
       <th>{{$food->category}}</th>
       <th>{{$food->description}}</th>
       <th>{{$food->img1}}</th>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>