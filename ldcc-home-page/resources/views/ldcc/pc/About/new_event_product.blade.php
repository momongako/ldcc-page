<link rel=stylesheet href=frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver3.0.css>

@foreach ($newEvents as $newEvent)
    <div class="groove-element groove-column groove-col-33">
        <a  target=_blank>
            <div class="blog-post format-standard-image">
                <div class=blog-post_wrapper>
                    <div class=blog-post_media>
                        <a href="/new_event_product_detail/{{$newEvent->slug}}" rel=bookmark
                           target=_blank>
                            <img
                                    style=width:340px;height:214px; width=60 heigth=119
                                    alt="Lotte Data Communication Vietnam."
                                    srcset="https://pronexus-media-files.s3-ap-southeast-1.amazonaws.com/public{{$newEvent->thumbnail}}"
                                    data-src=https://cdn.groovetechnology.com/wp-content/uploads/2022/08/groove-technology-react-native-vs-native-which-one-to-choose-for-app-development-intro.png
                                    class=lazyload
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            <noscript><img
                                        class=lazy
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202625%201875'%3E%3C/svg%3E"
                                        data-src=https://cdn.groovetechnology.com/wp-content/uploads/2022/08/groove-technology-react-native-vs-native-which-one-to-choose-for-app-development-intro.png
                                        style=width:340px;height:214px; width=60 heigth=119
                                        alt="Lotte Data Communication Vietnam.">
                            </noscript>
                        </a>
                    </div>
                    <span
                            class=post_date>

                                <span> <?php echo date('M', strtotime($newEvent->created_at)) ?></span>
                                <span> <?php echo date('d', strtotime($newEvent->created_at)) ?> </span>
                                <span><?php echo date('Y', strtotime($newEvent->created_at)) ?></span>
                          </span>
                    <span class=post_meta-categories>
                            <span><?php echo $newEvent->type == 1 ? 'NEWS' : 'EVENT' ?> </span>
                          </span>
                    <div class=blog-post_content>
                        <div class=blog-post_title>
                            <a href="/new_event_product_detail/{{$newEvent->slug}}" target=_blank>
                                {{ $newEvent->title }}</a>
                            <p>{!! $newEvent->sub_title !!}</p>
                        </div>
                        <a href="/new_event_product_detail/{{$newEvent->slug}}"
                                target=_blank class=button-read-more>{{__('Read More')}}</a>
                        <span class="span-reading-time rt-reading-time"><span
                                    class="rt-label rt-prefix"></span>

                        </span></div>
                </div>
            </div>
        </a></div>
@endforeach




