<?php
    $api = \Prismic\Api::get(PRISMIC_URL);
    $document = $api->getSingle('specials');
    $specials = $document->data;
    $items = $specials->special_item;
?>

@if($specials->show_specials == 'show')
<section id="specials" class="section">
    <div class="columns">
        <div class="column">
            <h2 class="title papyrus is-1 has-text-centered">Specials | {{ $specials->date}}</h2>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="columns is-multiline is-variable is-0 has-text-centered">
            @foreach($items as $item)
            <div class="column is-6  {{ count($items) == 1 ? 'is-offset-3' : '' }}">
                @if(isset($item->image))
                <div class="feature-image" @click="showImage('{{ $item->image->url }}')">
                    <img-loader
                        :meta="{{ json_encode($item->image) }}" />
                </div>
                @endif

                <article class="menu-item">
                    <p class="title is-6">
                        <span class="papyrus has-text-weight-normal title is-5">
                            {{ $item->item_name }}
                        </span>
                        <strong>{{ money_format('%.2n', $item->price) }}</strong>
                    </p>
                    <p class="subtitle is-6 is-italic">
                        {{ $item->item_info }}
                    </p>
                </article>
            </div>
            @endforeach
        </div>
    </div>

</section>
@endif
