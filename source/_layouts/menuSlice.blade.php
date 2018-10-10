<?php
    use Prismic\Dom\RichText;
?>

    <div class="menu-section has-text-centered">
        <p class="title papyrus is-4 has-text-link">
            {{ RichText::asText($slice->primary->menu_section) }}
        </p>
        <p class="subtitle is-6 is-italic">
            {{ RichText::asText($slice->primary->menu_section_description) }}
        </p>

        @if(isset($slice->primary->section_image->url))
        <div class="feature-image">
            <img src="{{ $slice->primary->section_image->url }}" />
            <figcaption>{{ $slice->primary->image_desc }}</figcaption>
        </div>
        @endif

        @foreach($slice->items as $item)
        <article class="menu-item">
            <p class="title is-6">
                <strong>{{ $item->item_code }} - </strong>
                <span class="papyrus has-text-weight-normal title is-5">
                    {{ $item->item_name }}
                </span>
                <strong>{{ money_format('%.2n', $item->price) }}</strong>
            </p>
            <p class="subtitle is-6 is-italic">
                {{ $item->item_info }}
            </p>
        </article>
        @endforeach

        @if(isset($slice->primary->bottom_text))
        <p class="subtitle is-6">
            {{ RichText::asText($slice->primary->bottom_text) }}
        </p>
        @endif
    </div>
