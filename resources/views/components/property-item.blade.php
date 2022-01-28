
  <div class="card h-100" >
  <img src="{{ Storage::url($property->images[0]->url) }}" class="card-img-top rounded-1" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$property->title}}</h5>

    <a href="{{ route('property.detail', $property) }}" class="btn btn-primary">Ver inmueble</a>
  </div>
</div>
