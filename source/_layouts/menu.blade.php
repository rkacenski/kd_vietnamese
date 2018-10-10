<?php
    use Prismic\Dom\RichText;
    use Prismic\Api;
    use Prismic\LinkResolver;
    use Prismic\Predicates;

    $api = Api::get(PRISMIC_URL);
    $rs = $api->query(Predicates::at('document.type', 'menu'));
    //print_r($rs->results); die();
    $docs = $rs->results;
?>

<section id="menu" class="section">
    <div class="columns">
        <div class="column">
            <h2 class="title papyrus is-1 has-text-centered">Menu</h2>
        </div>
    </div>

    <hr>

    @foreach($docs as $doc)
        <p class="title papyrus is-2 has-text-primary has-text-centered">
            {{ RichText::asText($doc->data->header_header) }}
        </p>


        <div class="container">
            <div class="columns">

                <div class="column is-6 {{ count($doc->data->body) == 1 ? 'is-offset-3' : '' }}">
                    @foreach($doc->data->body as $k => $slice)
                        @if ($k % 2 == 0)
                            @include('_layouts.menuSlice')
                        @endif
                    @endforeach
                </div>

                @if(count($doc->data->body) > 1)
                    <div class="column is-6">
                        @foreach($doc->data->body as $k => $slice)
                            @if ($k % 2 != 0)
                                @include('_layouts.menuSlice')
                            @endif
                        @endforeach
                    </div>
                @endif

            </div>
        </div>

        <hr>
    @endforeach

</section>
