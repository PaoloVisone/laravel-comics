{{-- Card --}}
<div class="card bg-dark text-white border-0" style="width: 14rem;">
  <img src="{{ $thumb }}" class="card-img-top" alt="{{ $title }}" style="height: 200px; object-fit: cover;">
  <div class="card-body text-center">
    <h5 class="card-title">{{ $title }}</h5>
     @isset($price)
    <h6 class="card-subtitle">{{ $price }}</h6>
    @endisset
  </div>
</div>
