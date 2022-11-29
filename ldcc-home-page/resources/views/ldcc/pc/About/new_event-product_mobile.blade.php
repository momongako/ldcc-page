@foreach ($newEvents as $newEvent)
    <div class=swiper-slide>
        <figure class=swiper-slide-inner>
            <div
                    class="blog-post format-standard-image">
                <div
                        class="container-grid row blog_carousel blog-style-standard">
                    <div
                            class=blog-post_wrapper>
                        <div
                                class=blog-post_media>
                            <div
                                    class=blog-post_media_part>
                                <a href="/new_event_product_detail/{{$newEvent->slug}}"
                                   rel=bookmark target=_blank>
                                    <img
                                            srcset="https://pronexus-media-files.s3-ap-southeast-1.amazonaws.com/public{{$newEvent->thumbnail}}"
                                            alt="Lotte Data Communication Vietnam."
                                            data-src=https://cdn.groovetechnology.com/wp-content/uploads/2022/08/groove-technology-react-native-vs-native-which-one-to-choose-for-app-development-intro-350x200.png
                                            class=lazyload
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                    <noscript><img
                                                class=lazy
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20350%20200'%3E%3C/svg%3E"
                                                data-src=https://cdn.groovetechnology.com/wp-content/uploads/2022/08/groove-technology-react-native-vs-native-which-one-to-choose-for-app-development-intro-350x200.png
                                                alt="Lotte Data Communication Vietnam.">
                                    </noscript>
                                </a></div>
                        </div>
                        <div class=blog_post-meta_content>
                            <div class=blog-post_content>
                                <h3 class="blog-post_title">
                                    <a href=/new_event_product_detail/{{$newEvent->slug}}
                                                                                        rel=bookmark target=_blank>
                                        {{ $newEvent->title }}
                                    </a>
                                </h3>
                                <div class=blog-post_text>
                                    <div class=blog-post_text><p>{!! $newEvent->sub_title !!}</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
    </div>
@endforeach