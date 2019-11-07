<section id="gallery" class="wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>Gallery</h2>
      <p>Check our gallery from the recent events</p>
    </div>
  </div>
  @foreach($galleries as $gallery)
    <div class="owl-carousel gallery-carousel">
      @foreach($gallery->photos as $photo)
            @if(!is_null($photo->getUrl()))
            <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="gallery-carousel"><img src="{{ $photo->getUrl() }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
            @else
            <a href="{{ '' }}" class="venobox" data-gall="gallery-carousel"><img src="{{ '' }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
            @endif
        
      @endforeach
    </div>
  @endforeach
</section>
