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
            <div class="columns is-multiline">
                @foreach($doc->data->body as $slice)
                <div class="column is-6">
                    <div class="box has-text-centered">
                        <p class="title papyrus is-4 has-text-link">
                            {{ RichText::asText($slice->primary->menu_section) }}
                        </p>
                        <p class="subtitle is-6 is-italic">
                            {{ RichText::asText($slice->primary->menu_section_description) }}
                        </p>

                        @foreach($slice->items as $item)
                        <article class="menu-item">
                            <p class="title is-6">
                                <strong>{{ $item->item_code }} - </strong>
                                <span class="papyrus has-text-weight-normal title is-4">
                                    {{ $item->item_name }}
                                </span>
                                <strong>${{ money_format('%.2n', $item->price) }}</strong>
                            </p>
                            <p class="subtitle is-6 is-italic">
                                {{ $item->item_info }}
                            </p>
                        </article>
                        @endforeach

                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <hr>
    @endforeach

</section>
