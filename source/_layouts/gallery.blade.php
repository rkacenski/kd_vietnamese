<?php
    //use ;

    $api = \Prismic\Api::get(PRISMIC_URL);
    $document = $api->getSingle('gallery');
    $images = $document->data->gallery;
?>

<section id="gallery" class="section">
    <div class="columns">
        <div class="column">
            <h2 class="title papyrus is-1 has-text-centered">Gallery</h2>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="columns is-multiline is-variable is-0 has-text-centered">
            @foreach($images as $image)
            <div class="column is-4">
                <div class="feature-image" style="margin: .75em;" @click="showImage('{{ $image->image->large->url }}')">
                    <img-loader
                        :meta="{{ json_encode($image->image) }}"
                        desc="{{ $image->caption ?? '' }}" />
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
