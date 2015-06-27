<div class="bid"
     data-date="{{ $bid->created_at }}"
     data-title="{{ $bid->title }}"
     data-category="{{ $bid->category }}"
     >
     <hr>
     <div class="img-wrapper">
       <a href="{{ route('home.show', $bid)}}">
         {!! HTML::image('/uploads/img/' . $bid->image, $bid->title, ['class' => 'img-rounded img-responsive img-thumbnail']) !!}
       </a>
     </div>
     <hr>
     <div class="title">
       <strong>Titulo:</strong>
       {{ $bid->title }}
     </div>
     <div class="date">
       <strong>Fecha de creacion:</strong>
       {{ $resource->created_at->toFormattedDateString() }}
     </div>
     <div class="category">
       <strong>Categoria:</strong>
       {{ $bid->category }}
     </div>
     <div class="description">
       <strong>Descripcion:</strong>
       {{ $bid->description }}
     </div>
     <div class="actions">
       @if(Auth::user())
       <hr>
         @if(Auth::user()->canOffer($bid) && ! $bid->expired())
           {!! offer_link($bid) !!}
         @endif
         @if($bid->user == Auth::user())
           {!! edit_link($bid) !!}
           {!! destroy_link($bid) !!}
         @endif
       <hr>
       @endif

     </div>
</div>
